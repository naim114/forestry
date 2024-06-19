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
        // Database logic
        $cutRegime = [
            ["trees", 45],
            ["trees50", 50],
            ["trees55", 55],
            ["trees60", 60],
            ["trees65", 65]
        ];

        $dataPoints = [];

        foreach ($cutRegime as $regime) {
            $result = DB::selectOne("
                SELECT
                    ROUND(SUM(CASE WHEN status = 'CUT' THEN PROD ELSE 0 END), 4) AS PROD,
                    ROUND(SUM(CASE WHEN status = 'CUT' THEN DMG_stem + DMG_crown ELSE 0 END), 4) AS DMG,
                    (SELECT ROUND(SUM(V30), 4) FROM {$regime[0]} WHERE D30 > {$regime[1]} AND species_groups <= 5 AND species_groups != 4) AS PROD30,
                    (SELECT ROUND(SUM(V30), 4) FROM {$regime[0]}) AS GROWTH
                FROM {$regime[0]}
            ");

            if ($result) {
                $dataPoints[] = [
                    "cutRegime" => $regime[1],
                    "PROD" => $result->PROD,
                    "DMG" => $result->DMG,
                    "PROD30" => $result->PROD30,
                    "GROWTH" => $result->GROWTH
                ];
            }
        }

        $closestProdProd30 = null;
        $closestDifference = null;

        foreach ($dataPoints as $point) {
            $difference = abs($point['PROD'] - $point['PROD30']);

            if ($closestProdProd30 === null || $difference < $closestDifference) {
                $closestProdProd30 = $point;
                $closestDifference = $difference;
            }
        }

        // Pass data to the view
        return view('dashboard.index', [
            'dataPoints' => $dataPoints,
            'closestProdProd30' => $closestProdProd30
        ]);
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
