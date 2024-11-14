<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\clienteController;

Route::get('/', function () {
    return view('inicio');
})->name('rutaInicio');


    Route::get('/consultar', function () {
        return view('clientes');
        })->name('rutaClientes'); 

        // Route::view('/', 'Inicio')->name('rutaInicio');
        // Route::view('/form', 'formulario')->name('rutaForm');
        // Route::view('/consultar', 'clientes')->name('rutaClientes'); 

        Route::view('/component', 'componentes')->name('rutaComponent');

        // rutas para controlador
        Route::get('/', [ControladorVistas::class, 'home'])->name('rutaInicio');
        Route::get('/consulta', [ControladorVistas::class, 'consulta'])->name('rutaClientes'); 

        Route::post('/enviarCliente', [ControladorVistas::class, 'procesarCliente'])->name('rutaEnviar');

        /* rutas para controlador clienteController */
        Route::get('/cliente/create', [ClienteController::class, 'create'])->name('rutaForm');
