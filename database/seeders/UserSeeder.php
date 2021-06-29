<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        

        User::create([
            'name'=>'Alejandro Pérez',
            'email'=>'alejandro.perez@ae-sol.net',
            'password'=>bcrypt('Mephisto696?'),
        ])->assignRole('Admin');

        User::create([
            'name'=>'Arturo Arévalo',
            'email'=>'arturo.arevalo@ae-sol.net',
            'password'=>bcrypt('OrdenCompra2!'),
        ])->assignRole('Admin');

         User::create([
            'name'=>'David Badillo',
            'email'=>'david.badillo@ae-sol.net',
            'password'=>bcrypt('OrdenCompra2!'),
        ])->assignRole('Empleado');
        
        User::create([
            'name'=>'Jorge',
            'email'=>'jorge.molina@ae-sol.net',
            'password'=>bcrypt('OrdenCompra2!'),
        ])->assignRole('Empleado'); 

        User::create([
            'name'=>'Canek Lopez',
            'email'=>'canek.lopez@ae-sol.net',
            'password'=>bcrypt('aesolutions'),
        ])->assignRole('Usuario'); 
    }
}
