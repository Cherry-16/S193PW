<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVista extends Controller
{
    public function registrar()
    {
        return view('registro_prendas');
    } 
    public function procesarPrenda(Request $request)
    {
        $request->validate([
            'prenda' => 'required|string|max:255',
            'color' => 'required|string|max:50',
            'cantidad' => 'required|integer|min:1',
        ]);
    
        $prenda = $request->input('prenda');
        return redirect()->route('rutaregistro')->with('exito', "Se guardó: $prenda");
    }    
}