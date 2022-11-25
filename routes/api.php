<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//Mandamos a llamar al controller que se utiliza
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\VeterinariasController;
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

//Definimos las rutas Apiresource
Route::Apiresource('servicios',ApiServiciosController::class);
Route::Apiresource('usuarios',ApiUsuariosController::class);
Route::Apiresource('veterinarias',ApiVeterinariasController::class);