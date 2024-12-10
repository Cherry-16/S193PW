<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;

Route::get('/',[Controlador::class,'home'])->name('rutaInicio');
Route::get('/contacto',[Controlador::class, 'registro'])->name('rutaForm');
Route::get('/consultacontacto',[Controlador::class,'consulta'])->name('rutaContactos');
Route::post('/procesarcontacto',[Controlador::class,'procesarContacto']);

