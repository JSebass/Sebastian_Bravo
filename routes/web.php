<?php

use App\Http\Controllers\InformacionController;
use App\Http\Controllers\ProductosController;
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

Route::get('/',[InformacionController::class, 'index']);
Route::get('/informacion/mision_y_vision',[InformacionController::class, 'mision']);
Route::get('/informacion/contactos',[InformacionController::class, 'contactos']);
Route::get('/productos/perros',[ProductosController::class, 'perros']);

