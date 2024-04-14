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
}