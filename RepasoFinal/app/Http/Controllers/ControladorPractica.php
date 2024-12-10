<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPractica extends Controller
{
    public function home(){
        return view('RegistroPrenda');
    }
    public function procesarPrenda(Request $peticion){
        $validacion= $peticion->validate([
            'txtprenda' => 'required',
            'txtcolor' => 'required',
            'txtcantidad' => 'required|numeric',
        ]);
    
        $prenda = $peticion->input('txtprenda');
        $color = $peticion->input('txtcolor');
        session()->flash('exito', 'Se guardó la prenda: '. $prenda.$color);
        return to_route('rutaInicio');
    }
}
