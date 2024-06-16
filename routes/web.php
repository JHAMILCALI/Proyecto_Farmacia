<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\MedicamentoController;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('proveedores', ProveedorController::class);
Route::resource('medicamentos', MedicamentoController::class);