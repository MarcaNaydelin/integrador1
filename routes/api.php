<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuegosController;
use App\Http\Controllers\TemasController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\RetroalimentacionesController;

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

//tabla juego
Route::get('/juego', [JuegosController::class, 'index']);
Route::post('/juego', [JuegosController::class, 'store']);
Route::put('/juegos/{id}', [JuegosController::class, 'update']);
Route::delete('/juego/{id}', [JuegosController::class, 'destroy']);

//tabla tema
Route::get('/tema', [TemasController::class, 'index']);
Route::post('/tema', [TemasController::class, 'store']);
Route::put('/tema/{id}', [TemasController::class, 'update']);
Route::delete('/tema/{id}', [TemasController::class, 'destroy']);

//tabla user
Route::get('/user', [UsersController::class, 'index']);
Route::post('/user', [UsersController::class, 'store']);
Route::put('/user/{id}', [UsersController::class, 'update']);
Route::delete('/user/{id}', [UsersController::class, 'destroy']);

//tabla categoria
Route::get('/categoria', [CategoriasController::class, 'index']);
Route::post('categoria', [CategoriasController::class, 'store']);
Route::put('/categoria/{id}', [CategoriasController::class, 'update']);
Route::delete('/categoria/{id}', [CategoriasController::class, 'destroy']);

//tabla 
Route::get('/retro', [RetroalimentacionesController::class, 'index']);
Route::post('rerto', [RetroalimentacionesController::class, 'store']);
Route::put('/retro/{id}', [RetroalimentacionesController::class, 'update']);
Route::delete('/retro/{id}', [RetroalimentacionesController::class, 'destroy']);




