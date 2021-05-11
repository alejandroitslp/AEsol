<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productoscompra extends Model
{
    use HasFactory;
    protected $table = 'productos_compras';
    //se establece la llave primaria como cod_producto
    protected $primaryKey='id';

    protected $fillable = 
    [
        'folio',
        'codigo',
        'nombre',
        'cantidad',
        'precio',
    ];

}
