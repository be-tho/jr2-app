<?php

use App\Http\Controllers\CorteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticuloController;
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

//cortes
Route::get('/corte', [CorteController::class, 'index'])->name('corte.index')->middleware('auth');
Route::post('/corte', [CorteController::class, 'store'])->name('corte.store')->middleware('auth');
Route::get('/corte/{id}/edit', [CorteController::class, 'edit'])->name('corte.edit')->middleware('auth');
Route::put('/corte/{id}', [CorteController::class, 'update'])->name('corte.update')->middleware('auth');

//articulos
Route::get('/articulo', [ArticuloController::class, 'index'])->name('articulo.index')->middleware('auth');
Route::get('/articulos', [ArticuloController::class, 'create'])->name('articulo.create')->middleware('auth');
Route::post('/articulo', [ArticuloController::class, 'store'])->name('articulo.store')->middleware('auth');
Route::get('/articulo/{id}', [ArticuloController::class, 'show'])->name('articulo.show')->middleware('auth');
Route::get('/articulo/{id}/edit', [ArticuloController::class, 'edit'])->name('articulo.edit')->middleware('auth');
//Route::put('/articulo/{id}', [ArticuloController::class, 'update'])->name('articulo.update')->middleware('auth');

