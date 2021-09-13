<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $table = 'proveedores';
    
    protected $primaryKey='id';

    protected $fillable = 
    [
        'nombre_prov',
        'razon_social',
        'dir_prov',
        'loc_prov',
        'edo_prov',
        'cp_prov',
        'telefono_prov',
        'nombre_prov_suc',
        'RFC',
        
    ];

        public function compra(){
            return $this->hasOne('App\Models\Compra','prov_prod','id'); 
        } 
}
