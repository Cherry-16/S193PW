<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    public function home(){
        return view('principal');
    } 
    public function registro(){
        return view('formulario');
    }
    public function consulta(){
        return view('listado_contactos');
    }
    public function procesarContacto(Request $peticion){
        $validacion= $peticion->validate([
            'txtnombre'=>'required|min:4',
            'txtcorreo'=>'required|email',
            'txttelefono'=>'required|min:9'
        ]);
    
        $nombre = $peticion->input('txtnombre');
        session()->flash('exito', 'Se guardó el contacto: '. $nombre);
        return to_route('rutaForm');
    }
}
