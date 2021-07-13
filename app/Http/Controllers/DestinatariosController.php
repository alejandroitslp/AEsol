<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PDFController;

class DestinatariosController extends Controller
{
    //
    public function editar($id)
    {
        return view('DestinatariosMail.create', compact('id'));
    }
}
