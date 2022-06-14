<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StuffController;
use App\Http\Controllers\CategoryController;

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

Route::get('/create', [CategoryController::class,'addStuff'])->name('stuff.add');

Route::get('/category', [CategoryController::class, 'viewCategory'])->name('category');

Route::post('/create/done', [StuffController::class, 'createStuff'])->name('stuff.create');

Route::get('/{id}/category', [CategoryController::class, 'viewStuff'])->name('stuff.view');

Route::get('/{id}/edit', [StuffController::class, 'editStuff'])->name('stuff.edit');

Route::patch('/{id}/update', [StuffController::class, 'updateStuff'])->name('stuff.update');

Route::delete('/{id}/delete', [StuffController::class, 'deleteStuff'])->name('stuff.delete');