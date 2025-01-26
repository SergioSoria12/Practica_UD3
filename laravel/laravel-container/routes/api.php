<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CocheController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PiezaController;
use App\Http\Controllers\DetallePedidoController;

// Rutas para Clientes
Route::get('clientes', [ClienteController::class, 'index']);
Route::get('clientes/{id}', [ClienteController::class, 'show']);
Route::post('clientes', [ClienteController::class, 'store']);
Route::put('clientes/{id}', [ClienteController::class, 'update']);
Route::delete('clientes/{id}', [ClienteController::class, 'destroy']);

// Rutas para Coches
Route::get('coches', [CocheController::class, 'index']);
Route::get('coches/{id}', [CocheController::class, 'show']);
Route::post('coches', [CocheController::class, 'store']);
Route::put('coches/{id}', [CocheController::class, 'update']);
Route::delete('coches/{id}', [CocheController::class, 'destroy']);

// Rutas para Pedidos
Route::get('pedidos', [PedidoController::class, 'index']);
Route::get('pedidos/{id}', [PedidoController::class, 'show']);
Route::post('pedidos', [PedidoController::class, 'store']);
Route::put('pedidos/{id}', [PedidoController::class, 'update']);
Route::delete('pedidos/{id}', [PedidoController::class, 'destroy']);

// Rutas para Piezas
Route::get('piezas', [PiezaController::class, 'index']);
Route::get('piezas/{id}', [PiezaController::class, 'show']);
Route::post('piezas', [PiezaController::class, 'store']);
Route::put('piezas/{id}', [PiezaController::class, 'update']);
Route::delete('piezas/{id}', [PiezaController::class, 'destroy']);

// Rutas para Detalles de Pedidos
Route::get('detalle-pedidos', [DetallePedidoController::class, 'index']);
Route::get('detalle-pedidos/{id}', [DetallePedidoController::class, 'show']);
Route::post('detalle-pedidos', [DetallePedidoController::class, 'store']);
Route::put('detalle-pedidos/{id}', [DetallePedidoController::class, 'update']);
Route::delete('detalle-pedidos/{id}', [DetallePedidoController::class, 'destroy']);