<?php

namespace App\Http\Controllers;

use App\Models\SpeciesGroup;
use Illuminate\Http\Request;

class SpeciesGroupController extends Controller
{
    public function index()
    {
        $species_groups = SpeciesGroup::all();

        return view('dashboard.species_groups.index', compact('species_groups'));
    }

    public function view_add()
    {
        return view('dashboard.species_groups.add');
    }

    public function view_update($id)
    {
        $sg = SpeciesGroup::find($id);

        return view('dashboard.species_groups.update', compact('sg'));
    }

    public function view_delete($id)
    {
        $sg = SpeciesGroup::find($id);

        return view('dashboard.species_groups.delete', compact('sg'));
    }

    public function add(Request $request)
    {
        SpeciesGroup::create($request->all());

        return back()->with('success', 'Species Group successfully added!');
    }

    public function update(Request $request)
    {
        $update = $request->all();
        unset($update['_token']);

        SpeciesGroup::where('id', $update['id'])
            ->update($update);

        return back()->with('success', 'Species Group successfully updated!');
    }

    public function delete(Request $request)
    {
        $sg = SpeciesGroup::where('id', $request->id)
            ->first();

        SpeciesGroup::where('id', $sg->id)
            ->delete();

        return redirect()->route('species_groups.index')->with('success', 'Species Group successfully deleted!');
    }
}
