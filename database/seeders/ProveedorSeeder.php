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
            ],
            [
                'nombre_prov'=>'Induprotec',
                'dir_prov'=>'Julian de los Reyes 345, Cuartel de los Aguileres',
                'loc_prov'=>'San Luis Potosi',
                'edo_prov'=>'San Luis Potosi',
                'cp_prov'=>null,
                'telefono_prov'=>null,
                'nombre_prov_suc'=>'Veronica Hernandez Dominguez',
                'RFC'=>'HEDD850913DA9AV',
            ],
            [
                'nombre_prov'=>'Anclo centro S.A. DE C.V.',
                'dir_prov'=>'Antonio de Roda 125, Ricardo B. Anaya 1ra secc.',
                'loc_prov'=>'San Luis Potosi',
                'edo_prov'=>'San Luis Potosi',
                'cp_prov'=>null,
                'telefono_prov'=>null,
                'nombre_prov_suc'=>null,
                'RFC'=>null,
            ],
            [
                'nombre_prov'=>'Kombitec S.A. de C.V.',
                'dir_prov'=>'Av. Salvador Nava Martinez 232 Col. El paseo',
                'loc_prov'=>'San Luis Potosi',
                'edo_prov'=>'San Luis Potosi',
                'cp_prov'=>'78320',
                'telefono_prov'=>null,
                'nombre_prov_suc'=>null,
                'RFC'=>'KOM0702099T1',
            ],
            [
                'nombre_prov'=>'Grupo comercial Acomee S.A. de C.V.',
                'dir_prov'=>'Av. Salvador Nava Martinez 704-b Col. Nuevo paseo',
                'loc_prov'=>'San Luis Potosi',
                'edo_prov'=>'San Luis Potosi',
                'cp_prov'=>'78328',
                'telefono_prov'=>null,
                'nombre_prov_suc'=>null,
                'RFC'=>null,
            ],
            [
                'nombre_prov'=>'Gempsa',
                'dir_prov'=>'Avenida Industrias 2305, Col. Industrias',
                'loc_prov'=>'San Luis Potosi',
                'edo_prov'=>'San Luis Potosi',
                'cp_prov'=>'78399',
                'telefono_prov'=>null,
                'nombre_prov_suc'=>null,
                'RFC'=>'GHP041129M69',
            ]
        ]);
    }
}
