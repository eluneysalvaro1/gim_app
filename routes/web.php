<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EjercicioController;
use App\Http\Controllers\EstadisticasController;
use App\Http\Controllers\RutinaController;
use App\Models\Estadisticas;

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

Auth::routes();


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::resources([
        'users' => UserController::class,
        'estadisticas' => EstadisticasController::class,
        'rutina' => RutinaController::class,
        'ejercicio' => EjercicioController::class,
    ]);



