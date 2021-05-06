<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCompra;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $compras=Compra::orderBy('fecha_emision')->get();
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
        return view('Compras.create');
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
            $compra =Compra::create([
            'foliocompra'=> $request->folio,
            'codigo_producto'=>$request->codigo,
            'nombre_producto'=>$request->nombre,
            'cantidad_producto'=>$request->cantidad,
            'fecha_emision'=>$request->fechae,
            'prov_prod'=>$request->provprod,
            'precio_u'=>$request->punitario,
            'precio_total'=>$request->ptotal,
            'id_resp'=>$request->resp,
            'embarc'=>$request->embarque,
            't_moneda'=>$request->tmoneda,
            'met_pago'=>$request->metPago,
            'p_total_c_imp'=>$request->ptimp,
            'cot_ref'=>$request->cref,
            'fecha_ref'=>$request->fref,
            'cuenta_cargo'=>$request->ccargo,
            'fecha_req'=> $request->freq,
            ]);

            return redirect()->route('compras.index');
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
    public function destroy($id)
    {
        //
    }
}
