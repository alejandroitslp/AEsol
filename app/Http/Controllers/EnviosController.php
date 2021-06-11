<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Envio;
use Illuminate\Http\Request;

class EnviosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $envios=Envio::orderBy('id')->paginate(10);
        $compras=Compra::get();
        
        return view('Envios.index', compact('compras', 'envios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Envios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $envio=Envio::create([
            'nombre'=> $request->nombre,
            'nombre_enc'=>$request->nombre_enc,
            'dir_envio'=>$request->direccion,
            'loc_envio'=>$request->localidad,
            'cp_envio'=>$request->cp,
            'edo_envio'=>$request->estado,
            'telefono_envio'=>$request->telefono,
        ]);

            $envio1=Envio::where('nombre',$request->nombre)->first();
            return redirect()->route('envios.index', $envio1);
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
    public function destroy(Envio $envio)
    {
        //
        $envio->delete();
        return redirect()->route('envios.index');
    }
}
