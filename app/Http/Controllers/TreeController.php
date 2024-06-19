<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Tree;
use App\Models\Species;
use App\Models\SpeciesGroup;
use Illuminate\Http\Request;
use App\DataTables\TreeDataTable;

class TreeController extends Controller
{
    public function index()
    {
        $trees= Tree::paginate(1000);

        return view('dashboard.trees.index', compact('trees'));
    }

    public function perha()
    {
        return view('dashboard.trees.perha');
    }

    public function view_add()
    {
        $species = Species::all();
        $species_groups = SpeciesGroup::all();

        return view('dashboard.trees.add', compact('species', 'species_groups'));
    }

    public function view_update($id)
    {
        $tree = Tree::find($id);
        $species = Species::all();
        $species_groups = SpeciesGroup::all();

        return view('dashboard.trees.update', compact('tree', 'species', 'species_groups'));
    }

    public function view_delete($id)
    {
        $tree = Tree::find($id);

        return view('dashboard.trees.delete', compact('tree'));
    }

    public function add(Request $request)
    {
        Tree::create($request->all());

        return back()->with('success', 'Tree successfully added!');
    }

    public function update(Request $request)
    {
        $update = $request->all();
        unset($update['_token']);

        Tree::where('id', $update['id'])
            ->update($update);

        return back()->with('success', 'Tree successfully updated!');
    }

    public function delete(Request $request)
    {
        $tree = Tree::where('id', $request->id)
            ->first();

        Tree::where('id', $request->id)
            ->delete();

        return redirect()->route('trees.index')->with('success', 'Tree successfully deleted!');
    }

    public function felltree()
    {
        $trees = Tree::where('status', 'CUT')
            ->where('BlockX', 1)
            ->where('BlockY', 1)
            ->get();

        return view('dashboard.trees.felltree', compact('trees'));
    }

    public function year30()
    {
        $species_groups = SpeciesGroup::all();
        $data = [];

        foreach ($species_groups as $index => $group) {
            $trees = Tree::where('BlockX', 1)
                ->where('BlockY', 1)
                ->where('species_groups', $index + 1)
                ->get();

            $v = $trees->sum('volume_m3');
            $n = $trees->count();
            $p = $trees->sum('PROD');
            $d = $trees->where('status', 'VICTIM')->sum(function ($tree) {
                return $tree->DMG_crown + $tree->DMG_stem;
            });
            $g30 = $trees->sum('V30');
            $p30 = $trees->where('D30', '>', 45)->where('sp_group', '<=', 5)->where('sp_group', '!=', 4)->sum('V30');

            $data[] = [
                'group' => $group,
                'volume' => $v,
                'number' => $n,
                'production' => $p,
                'damage' => $d,
                'growth30' => $g30,
                'production30' => $p30,
            ];
        }

        return view('dashboard.trees.year30', compact('data'));
    }

    public function map()
    {
        // Fetch trees with diameter greater than 30
        $trees = Tree::where('diameter_dbh_cm', '>', 30)->get();

        // Process the data points and triangles
        $dataPoints = [];
        $triangles = [];
        $hitrange = 1;

        foreach ($trees as $tree) {
            $x = $tree->x;
            $y = $tree->y;
            $status = $tree->status;
            $angle = $tree->cut_angle;
            $stemHeight = $tree->stem_height_m;

            if ($tree->BlockX > 1) {
                $x = ($tree->BlockX - 1) * 100 + $tree->x;
            }
            if ($tree->BlockY > 1) {
                $y = ($tree->BlockY - 1) * 100 + $tree->y;
            }

            if ($status == 'CUT') {
                if ($angle > 0 && $angle < 90) {
                    $xend1 = $x + (($stemHeight + 5 + 5) * sin(deg2rad($angle + $hitrange)));
                    $yend1 = $y + (($stemHeight + 5 + 5) * cos(deg2rad($angle + $hitrange)));
                    $xend2 = $x + (($stemHeight + 5 + 5) * sin(deg2rad($angle - $hitrange)));
                    $yend2 = $y + (($stemHeight + 5 + 5) * cos(deg2rad($angle - $hitrange)));
                    $triangles[] = ["x" => [$x, $xend1, $xend2], "y" => [$y, $yend1, $yend2]];
                } elseif ($angle > 90 && $angle < 180) {
                    $xend1 = $x + (($stemHeight + 5 + 5) * sin(deg2rad(180 - $angle + $hitrange)));
                    $yend1 = $y - (($stemHeight + 5 + 5) * cos(deg2rad(180 - $angle + $hitrange)));
                    $xend2 = $x + (($stemHeight + 5 + 5) * sin(deg2rad(180 - $angle - $hitrange)));
                    $yend2 = $y - (($stemHeight + 5 + 5) * cos(deg2rad(180 - $angle - $hitrange)));
                    $triangles[] = ["x" => [$x, $xend1, $xend2], "y" => [$y, $yend1, $yend2]];
                } elseif ($angle > 180 && $angle < 270) {
                    $xend1 = $x - (($stemHeight + 5 + 5) * sin(deg2rad(180 + $angle + $hitrange)));
                    $yend1 = $y - (($stemHeight + 5 + 5) * cos(deg2rad(180 + $angle + $hitrange)));
                    $xend2 = $x - (($stemHeight + 5 + 5) * sin(deg2rad(180 + $angle - $hitrange)));
                    $yend2 = $y - (($stemHeight + 5 + 5) * cos(deg2rad(180 + $angle - $hitrange)));
                    $triangles[] = ["x" => [$x, $xend1, $xend2], "y" => [$y, $yend1, $yend2]];
                } elseif ($angle > 270 && $angle < 360) {
                    $xend1 = $x - (($stemHeight + 5 + 5) * sin(deg2rad(360 - $angle + $hitrange)));
                    $yend1 = $y + (($stemHeight + 5 + 5) * cos(deg2rad(360 - $angle + $hitrange)));
                    $xend2 = $x - (($stemHeight + 5 + 5) * sin(deg2rad(360 - $angle - $hitrange)));
                    $yend2 = $y + (($stemHeight + 5 + 5) * cos(deg2rad(360 - $angle - $hitrange)));
                    $triangles[] = ["x" => [$x, $xend1, $xend2], "y" => [$y, $yend1, $yend2]];
                }
            }

            if ($status == 'VICTIM') {
                if ($tree->DMG_stem > 0) {
                    $status = 'VICTIM STEM';
                } else {
                    $status = 'VICTIM CROWN';
                }
            }

            $dataPoints[] = [
                'x' => $x,
                'y' => $y,
                'id' => $tree->TreeNum,
                'status' => $status
            ];
        }

        return view('dashboard.trees.map', [
            'dataPoints' => json_encode($dataPoints, JSON_NUMERIC_CHECK),
            'triangles' => json_encode($triangles)
        ]);
    }

    public function summary()
    {
        $speciesGroups = [
            "Mersawa",
            "Keruing",
            "Dipterocarp Commercial",
            "Dipterocarp Non-Commercial",
            "Non-dipterocarp Commercial",
            "Non-dipterocarp Non-Commercial",
            "Others",
        ];

        $data = [];
        $totalVolume = 0;
        $totalCount = 0;
        $totalProduction = 0;

        foreach ($speciesGroups as $i => $speciesGroup) {
            $volume = 0;
            $number = 0;
            $production = 0;
            $damage = 0;
            $growth30 = 0;
            $production30 = 0;

            // Replace with your actual database connection logic (using Laravel's model or query builder)
            $trees = Tree::where('species_groups', $i + 1)
                ->select('volume_m3', 'prod', 'dmg_crown', 'dmg_stem', 'status', 'species_groups', 'd30', 'v30')
                ->get();

            foreach ($trees as $tree) {
                $volume += $tree->volume_m3;
                $number++;
                $production += $tree->prod;

                if ($tree->status === 'VICTIM') {
                    $damage += $tree->dmg_crown + $tree->dmg_stem;
                }

                $growth30 += $tree->v30;

                if ($tree->d30 > 45 && $tree->species_groups <= 5 && $tree->species_groups != 4) {
                    $production30 += $tree->v30;
                }
            }

            $data[] = [
                'species_group' => $speciesGroup,
                'volume' => round($volume, 4),
                'number' => $number,
                'production' => round($production, 4),
                'damage' => round($damage, 4),
                'growth30' => round($growth30, 4),
                'production30' => round($production30, 4),
            ];

            $totalVolume += $volume;
            $totalCount += $number;
            $totalProduction += $production;
        }

        // Calculate total damage for cut trees
        $totalDamage = Tree::where('status', 'CUT')
            ->select(DB::raw('SUM(dmg_stem + dmg_crown) AS dmg'))
            ->first()
            ->dmg; // Assuming you have a `dmg` attribute in the result

        // Calculate total V30
        $totalV30 = Tree::select(DB::raw('SUM(v30) AS v30'))->first()->v30;

        // Calculate total P30
        $totalP30 = Tree::where('d30', '>', 45)
            ->where('species_groups', '<=', 5)
            ->where('species_groups', '!=', 4)
            ->select(DB::raw('SUM(v30) AS p30'))
            ->first()
            ->p30;

        return view('dashboard.trees.summary', compact('data', 'totalVolume', 'totalCount', 'totalProduction', 'totalDamage', 'totalV30', 'totalP30'));
    }
}