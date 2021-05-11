<?php

namespace App\Http\Controllers;

use App\Models\ResponsableCompra;
use Illuminate\Http\Request;

class Responsables extends Controller
{
    //
    public function index()
    {
        //
        $proveedores=ResponsableCompra::orderBy('nombre_resp')->paginate(5);
        
        return view('Responsables.index');
    }
}
