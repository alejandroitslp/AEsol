<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProveedor;
use Illuminate\Http\Request;
use App\Models\Proveedor;
use App\Models\Compra;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        if(($request->nombreprov)!=null)
        {
            $proveedores=Proveedor::where('nombre_prov', 'LIKE', '%'.$request->nombreprov.'%')->get();
            //('nombre_producto', 'LIKE', '%'.$search.'%')->get();
            //('cod_producto', '=' ,$request->codigo)->get();
        }
        else
        {
            $proveedores = Proveedor::orderBy('nombre_prov','asc')->paginate(5);
        }



        /* $proveedores=Proveedor::orderBy('nombre_prov')->paginate(5); */
        $compras=Compra::get();
        return view('Proveedores.index', compact('proveedores', 'compras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProveedor $request)
    {
        //
        
        
        $proveedor=Proveedor::create([
            'nombre_prov'=> $request->nombre_prov,
            'dir_prov'=>$request->dir_prov,
            'loc_prov'=>$request->loc_prov,
            'edo_prov'=>$request->edo_prov,
            'cp_prov'=>$request->cp_prov,
            'telefono_prov'=>$request->telefono_prov,
            'nombre_prov_suc'=>$request->nombre_prov_suc,
            'RFC'=>$request->RFC,
        ]);

        $proveedor1=Proveedor::where('nombre_prov',$request->nombre)->first();
        return redirect()->route('proveedores.index', $proveedor1);
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
    public function destroy(Proveedor $proveedor)
    {
        //
        $proveedor->delete();
        return redirect()->route('proveedores.index');
    }
}
