<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    // usamos este controlador para administrar la lógica de las vistas
    
    public function home()
    {
        return view('inicio');
    } 
    public function formulario()
    {
        return view('formulario');
    }
    public function consulta()
    {
        return view('clientes');
    }
    public function procesarCliente(Request $peticion)
    {
        // return 'Si llegó la info del cliente :)'; 

        //mostramos todo lo que trae la peticion
        //return $peticion->all();

        //ruta de donde se realizo la peticion
        //return $peticion->path(); 

        //url del origen de petición
        //return $peticion->url();  

        //return $peticion->ip();

        // respuestas de redirección

        //redireccion usando la ruta
        //return redirect('/');    

        //redireccion usando el nombre de la ruta
        //return redirect()->route('rutaClientes');

        //redireccion al origen de peticion  
        //return back(); 
        
        //redirección con variable adjunta
        // $id = [['usuario'=>1], ['usuario'=>2]];
        // return view('formulario',compact('id')); 

        //redireccion con un mensaje flash en session
        $usuario= $peticion->input('txtnombre'); 
        session()->flash('exito','Se guardo el usuario: '.$usuario);
        return to_route('rutaForm');
    }
}
