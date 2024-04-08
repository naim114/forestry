<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use Illuminate\Http\Request;
use App\DataTables\TreeDataTable;

class TreeController extends Controller
{
    public function index(TreeDataTable $dataTable)
    {
        return $dataTable->render('dashboard.trees.index');
    }
}