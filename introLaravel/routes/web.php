<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('rutaInicio');

Route::get('/form', function () {
    return view('formulario');
    })->name('rutaForm');

    Route::get('/consultar', function () {
        return view('clientes');
        })->name('rutaClientes'); 

        Route::view('/', 'Inicio')->name('rutaInicio');
        Route::view('/form', 'formulario')->name('rutaForm');
        Route::view('/consultar', 'clientes')->name('rutaClientes'); 
        Route::view('/component', 'componentes')->name('rutaComponent');