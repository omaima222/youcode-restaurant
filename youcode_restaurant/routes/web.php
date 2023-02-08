<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\dishController;
use App\Http\Controllers\MenuController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

// Route::get('/Dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('Dashboard');
Route::resource('/Dashboard', dishController::class);
Route::get('/menu', [MenuController::class, 'index'])->name('menu');


// Route::resource('/ello',testController::class);