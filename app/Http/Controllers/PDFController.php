<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Compra;
use App\Models\Envio;
use App\Models\Productoscompra;
use App\Models\Proveedor;
use App\Models\ResponsableCompra;

class PDFController extends Controller
{
    public function generatePDF($id)
    {
        $compra=Compra::find($id);
        $vartemp=$compra->foliocompra;
        $vartemp2=$compra->prov_prod;
        $vartemp3=$compra->id_envios;
        $vartemp4=$compra->id_resp;
        $comprasproducto=Productoscompra::where('folio',$vartemp)->get();
        $proveedor=Proveedor::where('id',$vartemp2)->get();
        $responsable=ResponsableCompra::where('id',$vartemp4)->first();
        $envio=Envio::where('id', $vartemp3)->first();
        foreach ($proveedor as $item) {
            # code...
            $tempid=$item->nombre_prov;
        }
        
        $pdf = PDF::loadView('myPDF', compact('compra', 'comprasproducto', 'proveedor', 'envio', 'responsable'));

        return $pdf->download(''.$vartemp.'.pdf');

        /* $data = [
            'title' => 'Welcome to IT',
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('IT.pdf'); */
    }
}
