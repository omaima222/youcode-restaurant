<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dishController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\profileController;

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

Route::resource('Dashboard', dishController::class)->middleware('auth');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::resource('/profile', profileController::class)->middleware('auth');;

Route::get('/test', function () {
    return "ihiuhi";
});

