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

        /* rutas para controlador clienteController */
        Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaForm');
        Route::post('/cliente', [clienteController::class, 'store'])->name('rutaEnviar');
        Route::get('/cliente', [clienteController::class, 'index'])->name('rutaClientes');

        //Eliminar cliente 
        Route::get('/cliente/{id}', [clienteController::class, 'destroy'])->name('rutaEliminar');

        // Mostrar formulario de edición
        Route::get('/cliente/{id}/edit', [clienteController::class, 'edit'])->name('rutaEditar');
        // Actualizar cliente
        Route::put('/cliente/{id}', [clienteController::class, 'update'])->name('rutaActualizar');

