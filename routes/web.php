<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GastoController;

// Ruta raíz que redirige al controlador de gastos para mostrar la lista de gastos
Route::get('/', [GastoController::class, 'index']);  // Redirige al index de los gastos

// Rutas para el controlador de gastos (CRUD completo)
Route::resource('gastos', GastoController::class);


