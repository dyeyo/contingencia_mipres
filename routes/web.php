<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/servicios-neps', [App\Http\Controllers\ServiciosNepsController::class, 'index'])->name('servicios-neps');
Route::get('/servicios-neps/crear', [App\Http\Controllers\ServiciosNepsController::class, 'create'])->name('servicios-neps-crear');
