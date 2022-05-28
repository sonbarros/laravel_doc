<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColecoesController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/colecoes/aula01', [ColecoesController::class, 'aula01']);
Route::get('/colecoes/aula02', [ColecoesController::class, 'aula02']);
Route::get('/colecoes/aula03', [ColecoesController::class, 'aula03']);
Route::get('/colecoes/aula04', [ColecoesController::class, 'aula04']);
Route::get('/colecoes/aula05', [ColecoesController::class, 'aula05']);
Route::get('/colecoes/aula06', [ColecoesController::class, 'aula06']);


