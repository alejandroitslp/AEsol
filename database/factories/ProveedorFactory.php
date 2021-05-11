<?php

namespace Database\Factories;

use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ProveedorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proveedor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre_prov'=>$this->faker->company(),
            'dir_prov'=>$this->faker->address(),
            'loc_prov'=>$this->faker->state(),
            'edo_prov'=>$this->faker->state(),
            'cp_prov'=>$this->faker->numerify('#####'),
            'telefono_prov'=>$this->faker->numerify('##########'),

        ];
    }
}
