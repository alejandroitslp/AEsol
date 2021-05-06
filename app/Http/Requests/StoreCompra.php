<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompra extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'folio'=>'required',
            'codigo'=>'required',
            'nombre'=>'required',
            'cantidad'=>'required',
            'fechae'=>'required',
            'provprod'=>'required',
            'punitario'=>'required',
            
            'resp'=>'required',
            'embarque'=>'required',
            'tmoneda'=>'required',
            'metPago'=>'required',
            
            'cref'=>'required',
            'fref'=>'required',
            'ccargo'=>'required',
            'freq'=> 'required',
        ];
    }

    public function attributes()
    {
        return [
            'nombre' => 'nombre del producto'
        ];           
    }
}
