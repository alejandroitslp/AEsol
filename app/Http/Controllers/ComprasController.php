<?php

namespace App\Http\Controllers;

use App\Http\Livewire\TablaCompras;
use App\Models\Compra;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCompra;
use App\Models\Proveedor;
use App\Models\ResponsableCompra;
use Carbon\Carbon;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $variable;

    public function index()
    {
        //
        
        $compras=Compra::orderBy('fecha_emision')->paginate(10);
        
        return view('Compras.index', compact('compras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $proveedores= Proveedor::get();
        $responsables=ResponsableCompra::get();
        return view('Compras.create', compact('proveedores', 'responsables'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompra $request)
    {
        //
             /* $valor1 = 0;
            $valor2 = $request->cantidad;
            $vptotal= $valor1 * $valor2;

            $imp=$vptotal*.16;
            $vpcimp=$imp+$vptotal; */
            $valor1=$request->tipo;
            $valor2=$request->folio;
            $valor3=$valor1.$valor2;
            
            $fechaActual = Carbon::now(); 
           

            $compra =Compra::create([
            'foliocompra'=> $valor3,
            'fecha_emision'=>$fechaActual,
            'prov_prod'=>$request->provprod,
            'precio_total'=>0,
            'id_resp'=>$request->resp,
            'embarc'=>$request->embarque,
            't_moneda'=>$request->tmoneda,
            'met_pago'=>$request->metPago,
            'impuesto'=>0,
            'p_total_c_imp'=>0,
            'cot_ref'=>$request->cref,
            'fecha_ref'=>$request->fref,
            'cuenta_cargo'=>$request->ccargo,
            'fecha_req'=> $request->freq,
            'requisita'=>$request->requisita,
            ]);

            
            $compra1=Compra::where('foliocompra',$valor3)->first();
            return redirect()->route('compras.show', $compra1);
        ; 


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $compra=Compra::find($id);
        return view('Compras.show',compact('compra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compra $compra)
    {
        //
        $compra->delete();
        return redirect()->route('compras.index');
    }
    

}
