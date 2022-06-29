<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CompraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

        'proveedor_id'=>$this->faker->numberBetween(1,10),
        'user_id'=>$this->faker->numberBetween(1,10),
        'fecha'=>$this->faker->date(),
        'monto'=>$this->faker->numberBetween(1,10),

        ];
    }
}
