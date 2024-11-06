<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVista;

Route::get('/', [ControladorVista::class, 'registrar'])->name('rutaregistro');
Route::post('/registro', [ControladorVista::class, 'procesarPrenda'])->name('guardarPrenda');
