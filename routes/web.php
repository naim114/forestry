<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TreeController;
use App\Http\Controllers\SpeciesController;
use App\Http\Controllers\SpeciesGroupController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard.index');
})->name('index');

Route::get('/species',
    [SpeciesController::class, 'index']
)->name('species.index');

Route::get('/species_groups',
    [SpeciesGroupController::class, 'index']
)->name('species_groups.index');

Route::get('/trees',
    [TreeController::class, 'index']
)->name('trees.index');

Route::get('/trees/perha',
    [TreeController::class, 'perha']
)->name('trees.perha');

Route::get('/trees/stand',
    [TreeController::class, 'stand']
)->name('trees.stand');