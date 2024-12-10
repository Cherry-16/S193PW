<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorPractica;

Route::get('/',[ControladorPractica::class,'home'])->name('rutaInicio');
Route::post('/procesarprenda',[ControladorPractica::class,'procesarPrenda']);