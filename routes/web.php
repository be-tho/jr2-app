<?php

use App\Http\Controllers\CorteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index')->middleware('auth');

//Login
Route::get('/login', [LoginController::class, 'index'])->name('auth.index');
Route::post('/login', [LoginController::class, 'store'])->name('auth.store');
Route::get('/logout', [LoginController::class, 'destroy'])->name('auth.destroy');

//crear corte
Route::get('/corte', [CorteController::class, 'index'])->name('corte.index')->middleware('auth');
Route::post('/corte', [CorteController::class, 'store'])->name('corte.store')->middleware('auth');

