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
    public function almacenar(Request $request, $id)
    {
        $email=$request->emailProv;
        $asunto=$request->asuntomail;
        return redirect()->route('enviarPDF', compact('id','email','asunto'));
    }
}
