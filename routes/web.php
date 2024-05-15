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

Route::get('/species/add',
    [SpeciesController::class, 'view_add']
)->name('species.view.add');

Route::post('/species/add',
    [SpeciesController::class, 'add']
)->name('species.add');

Route::get('/species/update/{id}',
    [SpeciesController::class, 'view_update']
)->name('species.view.update');

Route::post('/species/update',
    [SpeciesController::class, 'update']
)->name('species.update');

Route::get('/species/delete/{id}',
    [SpeciesController::class, 'view_delete']
)->name('species.view.delete');

Route::post('/species/delete',
    [SpeciesController::class, 'delete']
)->name('species.delete');

Route::get('/species_groups',
    [SpeciesGroupController::class, 'index']
)->name('species_groups.index');

Route::get('/species_groups/add',
    [SpeciesGroupController::class, 'view_add']
)->name('species_groups.view.add');

Route::post('/species_groups/add',
    [SpeciesGroupController::class, 'add']
)->name('species_groups.add');

Route::get('/species_groups/update/{id}',
    [SpeciesGroupController::class, 'view_update']
)->name('species_groups.view.update');

Route::post('/species_groups/update',
    [SpeciesGroupController::class, 'update']
)->name('species_groups.update');

Route::get('/species_groups/delete/{id}',
    [SpeciesGroupController::class, 'view_delete']
)->name('species_groups.view.delete');

Route::post('/species_groups/delete',
    [SpeciesGroupController::class, 'delete']
)->name('species_groups.delete');

Route::get('/trees',
    [TreeController::class, 'index']
)->name('trees.index');

Route::get('/trees/add',
    [TreeController::class, 'view_add']
)->name('trees.view.add');

Route::post('/trees/add',
    [TreeController::class, 'add']
)->name('trees.add');

Route::get('/trees/update/{id}',
    [TreeController::class, 'view_update']
)->name('trees.view.update');

Route::post('/trees/update',
    [TreeController::class, 'update']
)->name('trees.update');

Route::get('/trees/delete/{id}',
    [TreeController::class, 'view_delete']
)->name('trees.view.delete');

Route::post('/trees/delete',
    [TreeController::class, 'delete']
)->name('trees.delete');

Route::get('/trees/perha',
    [TreeController::class, 'perha']
)->name('trees.perha');

Route::get('/trees/stand',
    [TreeController::class, 'stand']
)->name('trees.stand');

Route::get('/trees/felltree',
    [TreeController::class, 'felltree']
)->name('trees.felltree');

Route::get('/trees/year30',
    [TreeController::class, 'year30']
)->name('trees.year30');