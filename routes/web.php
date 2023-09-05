<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;

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

Route::get('/', [TeamController::class, 'index']);




Route::get('create', [TeamController::class, 'create'])->name('create');
Route::post('store', [TeamController::class, 'store'])->name('store');


Route::get('edit/{team_id}', [TeamController::class, 'update'])->name('edit');

Route::post('edit-store', [TeamController::class, 'editstore'])->name('editstore');
Route::delete('delete', [TeamController::class, 'destroy'])->name('delete');