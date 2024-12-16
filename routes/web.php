<?php

use App\Http\Controllers\DatoController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\EspecialcController;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\IdentidadController;
use App\Http\Controllers\OtrocController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('documentos', DocumentoController::class);
Route::resource('identidads', IdentidadController::class);
Route::resource('otrocs', OtrocController::class);
Route::resource('especialcs', EspecialcController::class);
Route::resource('grados', GradoController::class);
Route::resource('datos', DatoController::class);