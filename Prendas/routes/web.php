<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVista;

Route::get('/registro', [ControladorVista::class, 'registrar'])->name('rutaregistro');
