<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cliente', [ClienteController::class, 'listar']);
Route::post('/cliente', [ClienteController::class, 'salvar']);
Route::put('/cliente/{id}', [ClienteController::class, 'editar']);
Route::delete('/cliente/{id}', [ClienteController::class, 'excluir']);

