<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/produtos',[ProdutoController::class, 'index']);
Route::post('/produtos',[ProdutoController::class, 'store']);

Route::post('/clientes',[ClienteController::class, 'clienteStore']);