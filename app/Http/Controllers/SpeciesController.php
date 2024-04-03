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
}
