<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Compra;
use App\Models\Envio;
use App\Models\Productoscompra;
use App\Models\Proveedor;
use App\Models\ResponsableCompra;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\Types\This;

class PDFController extends Controller
{
    public function logicaCreacion($id)
    {
        $compra=Compra::find($id);
        $vartemp=$compra->foliocompra;
        $vartemp2=$compra->prov_prod;
        $vartemp3=$compra->id_envios;
        $vartemp4=$compra->id_resp;
        $comprasproducto=Productoscompra::where('folio',$vartemp)->get();
        if (count($comprasproducto)>20) {
            $comprasproductocoll=$comprasproducto->split(5);
        }
        if (count($comprasproducto)>15) {
            $comprasproductocoll=$comprasproducto->split(3);
        }
        if (count($comprasproducto)>7) {
            $comprasproductocoll=$comprasproducto->split(2);
        }
        else{
            $comprasproductocoll=$comprasproducto->split(1);
        }
        $comprasproductocoll->all();
        

        $proveedor=Proveedor::where('id',$vartemp2)->get();
        $responsable=ResponsableCompra::where('id',$vartemp4)->first();
        $envio=Envio::where('id', $vartemp3)->first();
        foreach ($proveedor as $item) {
            # code...
            $tempid=$item->nombre_prov;
        }
        $data=compact('compra', 'comprasproductocoll', 'proveedor', 'envio', 'responsable');
        $pdf = PDF::loadView('myPDF', $data);
        return compact('pdf','data');
    }

    public function generatePDF($id)
    {
        $pdf1=$this->logicaCreacion($id);
        extract($pdf1);
        $compra=Compra::find($id);

        return $pdf->download(''.$compra->foliocompra.'.pdf');

        /* $data = [
            'title' => 'Welcome to IT',
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('IT.pdf'); */
    }
    public function sendPDF(Request $request, $id)
    {
        $request->validate([
            'emailProv'=>'required'
        ]);
        
        $emailreq=explode(',',$request->emailProv);
        $asuntoreq=$request->asuntomail;
        $msjvar=$request->msj;
        
        $compra=Compra::find($id);
        $pdf1=$this->logicaCreacion($id);
        extract($pdf1);
        if ($asuntoreq=="null"||$asuntoreq=="") {
            $data["title"] = "Orden de Compra con folio: '$compra->foliocompra'";
        }
        else
        {
            $data["title"] = $asuntoreq;
        }
        $data["email"] = $emailreq;
        $data["bodymsj"] = $msjvar;
        
        
        
          Mail::send('email',$data, function ($message) use ($data, $pdf, $compra) {

            $message->to($data["email"], $data["email"])
                ->subject($data["title"])
                ->attachData($pdf->output(), "".$compra->foliocompra .".pdf");
            });
        
        return redirect()->route('compras.index');
    }
}
