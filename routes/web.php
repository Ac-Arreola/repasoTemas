<?php

use App\Http\Controllers\controladorVistas;
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

Route::get('/', [controladorVistas::class,'showWelcome']);
Route::get('Main', [controladorVistas::class,'showMain'])->name('apodoMain');
Route::get('Registration', [controladorVistas::class,'showRegistrar'])->name('apodoReg');
//ruta para envio post
//Route::view('saveReg',[controladorVistas::class,'procesarLibro']);
Route::post('guardarRegistro',[controladorVistas::class,'saveLibro']);
//Route::get('SaveLib',[controladorVistas::class,'procesarLibro']);


 