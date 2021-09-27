<?php

use App\Http\Controllers\FilmeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GeneroFilmeController;
use App\Http\Controllers\GeneroController;
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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// FILMES
Route::get('/filmes', [FilmeController::class, 'index']);
Route::get('/filmes/{id}', [FilmeController::class, 'show']);
Route::get('/filmes/search/{nome}', [FilmeController::class, 'search']);

// GENEROS
Route::get('/generos', [GeneroController::class, 'index']);
Route::get('/generos/{id}', [GeneroController::class, 'show']);
Route::post('/generos', [GeneroController::class, 'store']);
Route::put('/generos/{id}', [GeneroController::class, 'update']);
Route::delete('/generos/{id}', [GeneroController::class, 'destroy']);

// GENEROS E FILMES
Route::get('/generos_filmes/{id_filme}', [GeneroFilmeController::class, 'index']);

// Rotas Protegidas
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/filmes', [FilmeController::class, 'store']);
    Route::put('/filmes/{id}', [FilmeController::class, 'update']);
    Route::delete('/filmes/{id}', [FilmeController::class, 'destroy']);

    Route::post('/logout', [AuthController::class, 'logout']);

});
