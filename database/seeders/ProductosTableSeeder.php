<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Coconut Crumble',
            'quantity' => 10,
            'price' => 30000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor a Coco',
            'image' => 'vape1.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Lemon Ice Cream',
            'quantity' => 10,
            'price' => 30000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor a Helado de Limon',
            'image' => 'vape13.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Blue Razz Ice',
            'quantity' => 10,
            'price' => 30000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor a Mora Azul Helada',
            'image' => 'vape5.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Boba Shake',
            'quantity' => 10,
            'price' => 30000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor dulce a batido clásico con perlas de tapioca de boba',
            'image' => 'vape11.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Sour Apple Ice',
            'quantity' => 10,
            'price' => 30000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor a Manzana Verde Helada',
            'image' => 'vape7.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Fruit Punch',
            'quantity' => 10,
            'price' => 30000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor a Ponche de Frutas',
            'image' => 'vape4.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Raspberry Watermelon',
            'quantity' => 10,
            'price' => 30000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor a Frambuesa Sandía',
            'image' => 'vape2.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Froot Loops',
            'quantity' => 10,
            'price' => 30000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor a Cereal',
            'image' => 'vape3.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Strawberry Ice Cream',
            'quantity' => 10,
            'price' => 30000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor a Helado de Fresa',
            'image' => 'vape6.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Watermelon Ice Cream',
            'quantity' => 10,
            'price' => 30000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor a Helado de Sandia',
            'image' => 'vape8.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Tropical',
            'quantity' => 10,
            'price' => 30000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor Tropical',
            'image' => 'vape9.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Fresh Vanilla',
            'quantity' => 10,
            'price' => 30000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor a Vainilla Fresca',
            'image' => 'vape10.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Peach Lemon',
            'quantity' => 10,
            'price' => 30000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor a Durazno Limon',
            'image' => 'vape12.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Peach',
            'quantity' => 10,
            'price' => 30000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor a Durazno',
            'image' => 'vape14.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        
    }
}


