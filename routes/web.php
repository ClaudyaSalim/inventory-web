<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StuffController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [StuffController::class, 'index'])->name('home');

Route::get('/create', function () {
    return view('add-stuff');
})->name('stuff.add');

Route::post('/create/done', [StuffController::class, 'createStuff'])->name('stuff.create');

Route::get('/{id}/edit', [StuffController::class, 'editStuff'])->name('stuff.edit');

Route::patch('/{id}/update', [StuffController::class, 'updateStuff'])->name('stuff.update');

Route::delete('/{id}/delete', [StuffController::class, 'deleteStuff'])->name('stuff.delete');