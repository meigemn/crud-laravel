<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('clients', App\Http\Controllers\ClientController::class);
Route::resource('orders', App\Http\Controllers\OrderController::class);
use App\Http\Controllers\ClientController;

// Ruta para mostrar el índice de clientes
Route::get('/clientes', [ClientController::class, 'index'])->name('client.index');