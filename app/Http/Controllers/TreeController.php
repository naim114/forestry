<?php

namespace App\Http\Controllers;

use App\Models\Tree;
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
        return view('dashboard.trees.stand');
    }
}