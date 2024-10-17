<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('rutainicio');

Route::get('/repaso1', function () {
    return view('repaso1'); 
    })->name('rutarepaso1');