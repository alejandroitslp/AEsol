<?php

namespace Database\Seeders;

use App\Models\ResponsableCompra;
use Illuminate\Database\Seeder;

class ResponsablescompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ResponsableCompra::insert([
            [
            'nombre_resp'=>'David Badillo',
            'puesto'=>'Almacen y Compras',
        ],
        [
            'nombre_resp'=>'Jorge Molina ',
            'puesto'=>'Auxiliar de Calidad',
        ]
        ]);
    }
}
