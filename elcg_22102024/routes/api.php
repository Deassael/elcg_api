<?php

use App\Http\DepartamentoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/departamentos',[DepartamentoController::class,'obtenerDepartamentos']);
Route::get('/deptoporzona/{idzona}',[DepartamentoController::class,'obtenerDepartamentoPorZona']);
Route::get('/depto/{iddepto}',[DepartamentoController::class,'obtenerDepartamento']);
Route::post('/crearDepto',[DepartamentoController::class,'nuevoDepto']);
