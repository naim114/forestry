<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use Illuminate\Http\Request;
use App\DataTables\TreeDataTable;

class TreeController extends Controller
{
    public function index()
    {
        $trees= Tree::paginate(500);

        return view('dashboard.trees.index', compact('trees'));
    }
}
