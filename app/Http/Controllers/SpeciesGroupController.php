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

    public function view_update()
    {
        return view('dashboard.species_groups.update');
    }

    public function view_delete()
    {
        return view('dashboard.species_groups.delete');
    }

    public function add()
    {
        # code...
    }

    public function update()
    {
        # code...
    }

    public function delete()
    {
        # code...
    }
}