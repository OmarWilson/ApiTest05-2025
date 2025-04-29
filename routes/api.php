<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\VehiculoContactoController;

Route::get('/VehiculoContacto', [VehiculoContactoController::class, 'index']);

Route::get('/VehiculoContacto/{id}', [VehiculoContactoController::class, 'show']);

Route::post('/VehiculoContacto', [VehiculoContactoController::class, 'store']);

Route::put('/VehiculoContacto/{id}', [VehiculoContactoController::class, 'update']);

Route::delete('/VehiculoContacto/{id}', [VehiculoContactoController::class, 'destroy']);


