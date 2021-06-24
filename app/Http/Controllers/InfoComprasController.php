<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoComprasController extends Controller
{
    //
    public function costos()
    {
        return view('InfoCompras.index');
    }
}
