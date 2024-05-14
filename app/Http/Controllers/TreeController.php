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

     public function stand()
    {
        $treePerha = [
            ["Group 1", 15, 12, 4, 2, 2],
            ["Group 2", 21, 18, 6, 4, 4],
            ["Group 3", 21, 18, 6, 4, 4],
            ["Group 4", 30, 27, 9, 5, 3],
            ["Group 5", 30, 27, 9, 4, 4],
            ["Group 6", 39, 36, 12, 7, 4],
            ["Group 7", 44, 42, 14, 9, 4],
        ];

        $count = 1;

        return view('dashboard.trees.stand', compact('treePerha', 'count'));
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
}
