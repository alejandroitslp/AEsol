<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Compra;
use App\Models\Productoscompra;
use App\Models\Proveedor;
use App\Models\Envio;

class PDFSnappyController extends Controller
{
    //
    public function generarPDF($id)
    {
        $compra=Compra::find($id);
        $vartemp=$compra->foliocompra;
        $vartemp2=$compra->prov_prod;
        $vartemp3=$compra->id_envios;
        $comprasproducto=Productoscompra::where('folio',$vartemp)->get();
        $proveedor=Proveedor::where('id',$vartemp2)->get();
        $envio=Envio::where('id', $vartemp3)->first();
        foreach ($proveedor as $item) {
            # code...
            $tempid=$item->nombre_prov;
        }

        $snappy = App::make('snappy.pdf.wrapper');
        $snappy->loadView('myPDF', [
            'compra' => $compra,
            'comprasproducto' => $comprasproducto,
            'proveedor' => $proveedor,
            'envio'=> $envio,
        ]);
        return $snappy->download();

    }
}
