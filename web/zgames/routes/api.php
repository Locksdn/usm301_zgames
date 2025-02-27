<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsolaController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("marcas/get", [ConsolaController::class, "getMarcas"]);

Route::get("consolas/get", [ConsolaController::class, "getConsolas"]);

Route::post("consolas/post", [ConsolaController::class, "crearConsola"]);

Route::post("consolas/delete", [ConsolaController::class, "eliminarConsola"]);