<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarifaResolucionController;
use App\Http\Controllers\TarifaCargoController;
use App\Http\Controllers\TarifaBloqueController;
use App\Http\Controllers\ActualizacionController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tarifaresolucion', TarifaResolucionController::class);
Route::resource('tarifabloque', TarifaBloqueController::class);
Route::resource('tarifacargos', TarifaCargoController::class);
Route::resource('actualizacion', ActualizacionController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
