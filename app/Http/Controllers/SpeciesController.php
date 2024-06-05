<?php

namespace App\Http\Controllers;

use App\Models\Species;
use App\Models\Tree;
use App\Models\SpeciesGroup;
use Illuminate\Http\Request;
use DB;

class SpeciesController extends Controller
{
    public function dashboard()
    {
        // Fetch data and group by species group
        $speciesData = Species::with('speciesGroup')
            ->get()
            ->groupBy('species_groups')
            ->map(function ($group) {
                return [
                    'groupName' => $group->first()->speciesGroup->name,
                    'count' => $group->count(),
                ];
            });

        // Fetch data and group by species
        $treeData = Tree::select('species', \DB::raw('count(*) as total'))
            ->groupBy('species')
            ->get();


             $cutRegime = [
            ["trees", 45],
            ["trees50", 50],
            ["trees55", 55],
            ["trees60", 60],
            ["trees65", 65]
        ];

        $dataPoints = [];

        foreach ($cutRegime as $regime) {
            $result = DB::select("SELECT
                ROUND(SUM(CASE WHEN status = 'CUT' THEN PROD ELSE 0 END), 4) AS PROD,
                ROUND(SUM(CASE WHEN status = 'CUT' THEN DMG_stem + DMG_crown ELSE 0 END), 4) AS DMG,
                (SELECT ROUND(SUM(V30), 4) FROM {$regime[0]} WHERE D30 > {$regime[1]} AND species_groups <= 5 AND species_groups != 4) AS GROWTH
                FROM {$regime[0]}");

            if (!empty($result)) {
                $row = $result[0];
                $dataPoints[] = [
                    "cutRegime" => $regime[1],
                    "PROD" => $row->PROD,
                    "DMG" => $row->DMG,
                    "GROWTH" => $row->GROWTH
                ];
            }
        }

        // Determine the highest and lowest values
        $highestProd = null;
        $highestGrowth = null;
        $lowestDmg = null;

        foreach ($dataPoints as $point) {
            if ($highestProd === null || $point['PROD'] > $highestProd['PROD']) {
                $highestProd = $point;
            }
            if ($highestGrowth === null || $point['GROWTH'] > $highestGrowth['GROWTH']) {
                $highestGrowth = $point;
            }
            if ($lowestDmg === null || $point['DMG'] < $lowestDmg['DMG']) {
                $lowestDmg = $point;
            }
        }

        // Pass data to the view
        return view('dashboard.index', compact('speciesData', 'treeData', 'dataPoints', 'highestProd', 'highestGrowth', 'lowestDmg'));
    }

    public function index()
    {
        $species = Species::all();

        return view('dashboard.species.index', compact('species'));
    }

    public function view_add()
    {
        $groups = SpeciesGroup::all();

        return view('dashboard.species.add', compact('groups'));
    }

    public function view_update($id)
    {
        $groups = SpeciesGroup::all();

        $species = Species::find($id);

        return view('dashboard.species.update', compact('groups', 'species'));
    }

    public function view_delete($id)
    {
        $species = Species::find($id);

        return view('dashboard.species.delete', compact('species'));
    }

    public function add(Request $request)
    {
        Species::create($request->all());

        return back()->with('success', 'Species successfully added!');
    }

    public function update(Request $request)
    {
        $update = $request->all();
        unset($update['_token']);

        Species::where('id', $update['id'])
            ->update($update);

        return back()->with('success', 'Species successfully updated!');
    }

    public function delete(Request $request)
    {
        $species = Species::where('id', $request->id)
            ->first();

        Species::where('id', $request->id)
            ->delete();

        return redirect()->route('species.index')->with('success', 'Species successfully deleted!');
    }
}