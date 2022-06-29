<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CompraProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'producto_id'=>$this->faker->numberBetween(1,10),
            'compra_id'=>$this->faker->numberBetween(1,10),
            'cantidad'=>$this->faker->numberBetween(1,10),
            'precio_compra'=>$this->faker->numberBetween(1,10),
            'precio_venta'=>$this->faker->numberBetween(1,10),
            'total_compra'=>$this->faker->numberBetween(1,10),
        ];
    }
}
