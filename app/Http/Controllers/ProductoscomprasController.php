<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductoscompra;
use App\Models\Compra;
use App\Models\Productoscompra;
use Illuminate\Http\Request;

class ProductoscomprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productoscompras=Productoscompra::orderBy('folio')->get();
        return view('Productoscompras.index', compact('productoscompras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductoscompra $request)
    {
        //
        $productoscompra=Productoscompra::create([
            'folio'=> $request->folio,
            'codigo'=>$request->codigo,
            'nombre'=>$request->nombre,
            'cantidad'=>$request->cantidad,
            'precio'=>$request->precio,
        ]);
        
        return redirect()->route('productoscompras.agregar', $productoscompra);
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
        return "sexo";
        
        
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
    public function destroy(Productoscompra $productoscompra)
    {
        //
        $productoscompra->delete();
        return redirect()->route('productoscompras.index');
    }

    public function agregar($id){
        $compra1=Compra::where('id',$id)->get();
        foreach ($compra1 as $item) {
            # code...
            
            $item2= $item->foliocompra;
        }
        if(empty($item2)){
            $compraproducto=Productoscompra::where('id',$id)->get();
            foreach ($compraproducto as $item3) {
                # code...
                $item2=$item3->folio;
                return view('Productoscompras.create', compact('item2'));
            }
        }
        else
        {
            return view('Productoscompras.create', compact('item2'));
        }
    }
}
