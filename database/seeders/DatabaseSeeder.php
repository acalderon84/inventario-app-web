<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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



         \App\Models\User::factory()->create([
             'name' => 'Adrian Calderon',
            'email' => 'amarusadrian@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        \App\Models\User::factory(1000)->create();
        \App\Models\Producto::factory(1000)->create();
        \App\Models\Compra::factory(1000)->create();
        \App\Models\Proveedor::factory(1000)->create();
        \App\Models\Venta::factory(1000)->create();
        \App\Models\CompraProducto::factory(1000)->create();
        \App\Models\ProductoVenta::factory(1000)->create();
    }
}
