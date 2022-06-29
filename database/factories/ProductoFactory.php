<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
            'descripcion' => $this->faker->sentence(5),
            'existencia' => $this->faker->numberBetween(0,100),
            'presentacion'=>$this->faker->numberBetween(1,10),
            'proveedor_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
