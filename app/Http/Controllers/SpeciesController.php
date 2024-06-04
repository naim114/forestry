<?php

namespace App\Http\Controllers;

use App\Models\Species;
use App\Models\Tree;
use App\Models\SpeciesGroup;
use Illuminate\Http\Request;

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

        // Pass data to the view
        return view('dashboard.index', ['speciesData' => $speciesData, 'treeData' => $treeData]);
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