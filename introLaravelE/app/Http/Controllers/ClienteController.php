<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

class ClienteController extends Controller
{
    public function home()
    {
        return view('inicio');
    } 
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consulta = cliente::all(); 
        return view(('clientes'), compact('consulta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorCliente $request)
    {
        $addCliente = new cliente();
        $addCliente->nombre = $request->input('txtnombre');
        $addCliente->apellido = $request->input('txtapellido');
        $addCliente->correo = $request->input('txtcorreo');
        $addCliente->telefono = $request->input('txttelefono');
        $addCliente->save(); 

        $msj = $request->input('txtnombre');
        session()->flash('exito','Se guardó el cliente: '.$msj); 
        return redirect()->back(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cliente $cliente)
    {
        return view('updateCliente', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorCliente $request, cliente $cliente)
    {
        $cliente->nombre = $request->input('txtnombre');
        $cliente->apellido = $request->input('txtapellido');
        $cliente->correo = $request->input('txtcorreo');
        $cliente->telefono = $request->input('txttelefono');
        $cliente->save();
        $msj = $request->input('txtnombre');
        session()->flash('exito','Se actualizó el cliente: '.$msj); 
        return redirect()->route('cliente.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cliente $cliente)
    {
    $cliente->delete();
    session()->flash('exito', 'El cliente ha sido eliminado correctamente.');
    return redirect()->route('cliente.index');
    }
}
