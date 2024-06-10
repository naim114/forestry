<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TreeController;
use App\Http\Controllers\SpeciesController;
use App\Http\Controllers\SpeciesGroupController;
use App\Http\Controllers\StandTableController;
use App\Http\Controllers\ProcessController;
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
    return view('home.index');
})->name('home');

Route::get('/dashboard',
    [SpeciesController::class, 'dashboard']
)->name('index');

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

Route::get('/trees/felltree',
    [TreeController::class, 'felltree']
)->name('trees.felltree');

Route::get('/trees/year30',
    [TreeController::class, 'year30']
)->name('trees.year30');

Route::get('/map',
    [TreeController::class, 'map']
)->name('trees.map');

Route::get('/summary',
    [TreeController::class, 'summary']
)->name('trees.summary');

Route::get('/stand/volume/{db?}',
    [StandTableController::class, 'volume']
)->name('stand.volume');

Route::get('/stand/production0/{db?}',
    [StandTableController::class, 'production0']
)->name('stand.production0');

Route::get('/stand/damage/{db?}',
    [StandTableController::class, 'damage']
)->name('stand.damage');

Route::get('/stand/growth30/{db?}',
    [StandTableController::class, 'growth30']
)->name('stand.growth30');

Route::get('/stand/production30/{db?}',
    [StandTableController::class, 'production30']
)->name('stand.production30');

Route::get('/process',
    [ProcessController::class, 'index']
)->name('process');

Route::get('/process/calc_volume',
    [ProcessController::class, 'calc_volume']
)->name('process.calc_volume');

Route::get('/process/calc_cut_angle',
    [ProcessController::class, 'calc_cut_angle']
)->name('process.calc_cut_angle');

Route::get('/process/create_production0',
    [ProcessController::class, 'create_production0']
)->name('process.create_production0');

Route::get('/process/calc_dmg_stem',
    [ProcessController::class, 'calc_dmg_stem']
)->name('process.calc_dmg_stem');

Route::get('/process/calc_dmg_crown',
    [ProcessController::class, 'calc_dmg_crown']
)->name('process.calc_dmg_crown');

Route::get('/process/calc_v30_d30',
    [ProcessController::class, 'calc_v30_d30']
)->name('process.calc_v30_d30');