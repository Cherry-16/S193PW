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
        return view('repaso');
    } 
    public function Convertidor()
    {
         return 'Se convirtió :)';
}
}