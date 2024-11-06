<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVista extends Controller
{
    public function registrar()
    {
        return view('registro_prendas');
    }
}
