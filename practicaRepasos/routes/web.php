<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\repaso1Controller;

Route::get('/', function () {
    return view('inicio');
})->name('rutainicio');

Route::get('/repaso1', function () {
    return view('repaso1'); 
    })->name('rutarepaso1');

Route::post('/enviarmensaje',[repaso1Controller::class, 'convertidor'])->name('rutaConvertidor');