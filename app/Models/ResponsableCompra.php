<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponsableCompra extends Model
{
    use HasFactory;
    protected $table = 'responsables_compras';
    //se establece la llave primaria como cod_producto
    protected $primaryKey='id';

    protected $fillable = 
    [
        'nombre_resp',
        'puesto',
    ];
}
