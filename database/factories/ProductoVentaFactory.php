<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductoVenta>
 */
class ProductoVentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'producto_id'=> $this->faker->numberBetween(0,100),
            'venta_id'=> $this->faker->numberBetween(0,100),
            'cantidad'=> $this->faker->numberBetween(0,100),
            'precio_unitario'=> $this->faker->numberBetween(0,100),
            'subtotal'=> $this->faker->numberBetween(0,100),
        ];
    }
}
