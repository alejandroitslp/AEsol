<?php

namespace Database\Seeders;

use App\Models\Proveedor;
use App\Models\ResponsableCompra;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //Proveedor::factory()->count(10)->create();
        $this->call([
            //ResponsablescompraSeeder::class,
            //EnvioSeeder::class,
            ProveedorSeeder::class,
        ]);
    }
}
