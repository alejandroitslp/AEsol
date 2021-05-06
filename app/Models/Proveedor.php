<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $table = 'proveedores';
    //se establece la llave primaria como cod_producto
    protected $primaryKey='id';

    protected $fillable = 
    [
        'nombre_prov',
        'dir_prov',
        'loc_prov',
        'edo_prov',
        'cp_prov',
        'telefono_prov',
        
    ];
}
