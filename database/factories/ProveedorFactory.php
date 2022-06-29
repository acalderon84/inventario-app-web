<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->numberBetween(1,10),
            'descripcion'=>$this->faker->numberBetween(1,10),
            'telefono'=>$this->faker->phoneNumber(),
            'direccion'=>$this->faker->address(),

        ];
    }
}
