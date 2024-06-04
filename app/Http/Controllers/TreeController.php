<?php

namespace App\Http\Controllers;

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

        // Process the data points
        $dataPoints = [];
        foreach ($trees as $tree) {
            $x = $tree->x;
            $y = $tree->y;

            if ($tree->BlockX > 1) {
                $x = ($tree->BlockX - 1) * 100 + $tree->x;
            }
            if ($tree->BlockY > 1) {
                $y = ($tree->BlockY - 1) * 100 + $tree->y;
            }

            $dataPoints[] = [
                'x' => $x,
                'y' => $y,
                'id' => $tree->TreeNum,
                'status' => $tree->status
            ];
        }

        return view('dashboard.trees.map', ['dataPoints' => json_encode($dataPoints, JSON_NUMERIC_CHECK)]);
    }
}