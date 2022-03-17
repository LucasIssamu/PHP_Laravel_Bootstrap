<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, "welcome"]);

Route::get('/exemplo', [HomeController::class, "exemplo"]);

Route::get('/exercicio1', [HomeController::class, "exercicio1"]);

Route::get('/exercicio2', [HomeController::class, "exercicio2"]);

Route::get('/exercicio3', [HomeController::class, "exercicio3"]);

Route::get('/exercicio4', [HomeController::class, "exercicio4"]);

Route::get('/exercicio5', [HomeController::class, "exercicio5"]);

Route::post('/Resultado', [HomeController::class, "resultado"]);

Route::post('/Resultado1', [HomeController::class, "resultado1"]);

Route::post('/Resultado2', [HomeController::class, "resultado2"]);

Route::post('/Resultado3', [HomeController::class, "resultado3"]);

Route::post('/Resultado4', [HomeController::class, "resultado4"]);

Route::post('/Resultado5', [HomeController::class, "resultado5"]);
