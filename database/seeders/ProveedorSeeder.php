<?php

namespace Database\Seeders;

use App\Models\Proveedor;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Proveedor::insert([
            [
                'nombre_prov'=>'Comercializadora Zonet S de RL de CV',
                'dir_prov'=>'Ricardo B. Anaya No. 2008',
                'loc_prov'=>'San Luis Potosi',
                'edo_prov'=>'San Luis Potosi',
                'cp_prov'=>'78390',
                'telefono_prov'=>null,
                'nombre_prov_suc'=>null,
                'RFC'=>'CZO130219H6A',
            ],
            [
                'nombre_prov'=>'Tecno Electrica Potosi S.A. DE C.V.',
                'dir_prov'=>'Salvador Nava Martinez #456',
                'loc_prov'=>'San Luis Potosi',
                'edo_prov'=>'San Luis Potosi',
                'cp_prov'=>null,
                'telefono_prov'=>null,
                'nombre_prov_suc'=>null,
                'RFC'=>null,
            ],
            [
                'nombre_prov'=>'Clinica de la Rosa',
                'dir_prov'=>'Blvd Quintin Rodríguez #10 Col. Ciudad Futura',
                'loc_prov'=>'Delegacion la Pila',
                'edo_prov'=>'San Luis Potosi',
                'cp_prov'=>'78422',
                'telefono_prov'=>null,
                'nombre_prov_suc'=>null,
                'RFC'=>null,
            ]
        ]);
    }
}
