<?php

namespace Database\Factories;

use App\Models\ResponsableCompra;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResponsableCompraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ResponsableCompra::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre_resp'=>$this->faker->firstName(),
            'puesto'=>$this->faker->jobTitle(),
        ];
    }
}
