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
}
