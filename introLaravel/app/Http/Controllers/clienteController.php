<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;  
use App\Http\Requests\validadorCliente; 

class clienteController extends Controller
{
    /**
     * Aquí va la consulta de todo el CRUD
     */
    public function index()
    {
        $consultaclientes=DB::table('clientes')->get();
        return view('clientes',compact('consultaclientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Guardar usuario
     */
    public function store(validadorCliente $request)
    {
        DB::table('clientes')->insert([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        $usuario=$request->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);
        return to_route('rutaForm');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $cliente = DB::table('clientes')->find($id);
    return view('updateClientes', compact('cliente'));
}

public function update(Request $request, $id)
{
    $validated = $request->validate([
        'txtnombre' => 'required|min:4|max:20',
        'txtapellido' => 'required|min:4|max:20',
        'txtcorreo' => 'required|email|max:50',
        'txttelefono' => 'required|numeric|digits:10',
    ]);

    DB::table('clientes')->where('id', $id)->update([
        'nombre' => $validated['txtnombre'],
        'apellido' => $validated['txtapellido'],
        'correo' => $validated['txtcorreo'],
        'telefono' => $validated['txttelefono'],
        'updated_at' => Carbon::now(),
    ]);

    return redirect()->route('rutaClientes')->with('exito', 'Cliente actualizado correctamente.');
}



    /**
     * Eliminar usuario
     */
    public function destroy(string $id)
    {
    DB::table('clientes')->where('id', $id)->delete();

    session()->flash('exito', 'Se eliminó el usuario.');
    return redirect()->route('rutaClientes');
}

}
