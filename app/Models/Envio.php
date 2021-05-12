<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    use HasFactory;

    protected $table = 'envios';
    //se establece la llave primaria como cod_producto
    protected $primaryKey='id';

    protected $fillable = 
    [
            'nombre',
            'nombre_enc',
            'dir_envio',
            'loc_envio',
            'cp_envio',
            'edo_envio',
            'telefono_envio',
    ];
}
