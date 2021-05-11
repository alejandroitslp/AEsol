<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Compra;

class PDFController extends Controller
{
    public function generatePDF($id)
    {
        $compra=Compra::find($id);
        
        $data = [
            'title' => 'Welcome to IT',
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('IT.pdf');
    }
}
