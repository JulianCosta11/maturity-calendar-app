<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add-client', [App\Http\Controllers\HomeController::class, 'addClient']);
Route::post('/add-client', [App\Http\Controllers\CuitController::class, 'validCuit']);
Route::get('/client', [App\Http\Controllers\CuitController::class, 'index']);
Route::post('/client', [App\Http\Controllers\CuitController::class, 'addClient']);


