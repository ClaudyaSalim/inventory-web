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

Route::get('/', [StuffController::class, 'index']);

Route::get('/create', function () {
    return view('add-stuff');
});

Route::post('/create/stuff', [StuffController::class, 'createStuff']);