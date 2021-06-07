<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $table = 'compras';
    //se establece la llave primaria como cod_producto
    protected $primaryKey='id';

    protected $fillable = 
    [
        'foliocompra',
        'fecha_emision',
        'desc_orden',
        'prov_prod',
        'precio_total',
        'id_resp',
        'embarc',
        't_moneda',
        'met_pago',
        'impuesto',
        'p_total_c_imp',
        'cot_ref',
        'fecha_ref',
        'cuenta_cargo',
        'fecha_req',
        'requisita',
        'comentarios',
        'id_envios',
        'autorizado',
    ];

}
