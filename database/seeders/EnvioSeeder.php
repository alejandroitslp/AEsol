<?php

namespace Database\Seeders;

use App\Models\Envio;
use Illuminate\Database\Seeder;

class EnvioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Envio::insert([
            [
                'nombre'=> 'AE Solutions',
                'nombre_enc'=>'Arturo Arévalo',
                'dir_envio'=>'I. Zaragoza #151, Cuartel Aguilares',
                'loc_envio'=>'Villa de Pozos',
                'cp_envio'=>'78421',
                'edo_envio'=>'San Luis Potosi',
                'telefono_envio'=>'4443532787',
        ],
        /* [
                'nombre'=> '',
                'nombre_enc'=>'',
                'dir_envio'=>'',
                'loc_envio'=>'',
                'cp_envio'=>'',
                'edo_envio'=>'',
                'telefono_envio'=>'',
        ]  */
        ]);
    }
}
