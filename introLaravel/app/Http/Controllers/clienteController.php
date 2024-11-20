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
    public function edit(string $id)
    {
        //
    }

    /**
     * Actualizar usuario
     */
    public function update(Request $request, string $id)
    {
        DB::table('clientes')->where('id', $id)->update([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "updated_at"=>Carbon::now(),
            ]);
            $usuario=$request->input('txtnombre');
            session()->flash('exito','Se actualizo el usuario: '.$usuario);
            return to_route('rutaClientes');
    }

    /**
     * Eliminar usuario
     */
    public function destroy(string $id)
    {
        DB::table('clientes')->delete([
            "id"=>$id,
        ]);
        session()->flash('exito','Se elimino el usuario');
        return to_route('rutaClientes');
    }
}
