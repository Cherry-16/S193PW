<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class repaso1Controller extends Controller
{
    public function home()
    {
        return view('inicio');
    }

    public function formulario()
    {
        return view('repaso1');
    }

    public function convertidor(Request $request)
    {
        $cantidad = $request->input('cantidad');
        $unidad = $request->input('unidad');
        $resultado = '';

        switch ($unidad) {
            case 'MBtoGB':
                $resultado = $cantidad / 1024 . ' GB';
                break;
            case 'GBtoMB':
                $resultado = $cantidad * 1024 . ' MB';
                break;
            case 'GBtoTB':
                $resultado = $cantidad / 1024 . ' TB';
                break;
            case 'TBtoGB':
                $resultado = $cantidad * 1024 . ' GB';
                break;
        }

        return "El resultado de la conversión es: " . $resultado;
    }
}