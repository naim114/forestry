<?php

namespace App\Http\Controllers;

use App\Models\Species;
use App\Models\SpeciesGroup;
use Illuminate\Http\Request;

class SpeciesController extends Controller
{
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

    public function view_update()
    {
        $groups = SpeciesGroup::all();

        return view('dashboard.species.update', compact('groups'));
    }

    public function view_delete()
    {
        return view('dashboard.species.delete');
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