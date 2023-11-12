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
            'price' => 30.000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor a Coco',
            'image' => 'images/vapes.vape1.png', 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Lemon Ice Cream',
            'quantity' => 10,
            'price' => 30.000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor a Helado de Limon',
            'image' => 'images/vapes.vape13.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Blue Razz Ice',
            'quantity' => 10,
            'price' => 30.000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor a Mora Azul Helada',
            'image' => 'images/vapes.vape5.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Boba Shake',
            'quantity' => 10,
            'price' => 30.000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor dulce a batido clásico con perlas de tapioca de boba',
            'image' => 'images/vapes.vape11.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Sour Apple Ice',
            'quantity' => 10,
            'price' => 30.000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor a Manzana Verde Helada',
            'image' => 'images/vapes.vape7.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Fruit Punch',
            'quantity' => 10,
            'price' => 30.000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor a Ponche de Frutas',
            'image' => 'images/vapes.vape4.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Raspberry Watermelon',
            'quantity' => 10,
            'price' => 30.000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor a Frambuesa Sandía',
            'image' => 'images/vapes.vape2.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Froot Loops',
            'quantity' => 10,
            'price' => 30.000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor a Cereal',
            'image' => 'images/vapes.vape3.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Strawberry Ice Cream',
            'quantity' => 10,
            'price' => 30.000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor a Helado de Fresa',
            'image' => 'images/vapes.vape6.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Watermelon Ice Cream',
            'quantity' => 10,
            'price' => 30.000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor a Helado de Sandia',
            'image' => 'images/vapes.vape8.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Tropical',
            'quantity' => 10,
            'price' => 30.000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor Tropical',
            'image' => 'images/vapes.vape9.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Fresh Vanilla',
            'quantity' => 10,
            'price' => 30.000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor a Vainilla Fresca',
            'image' => 'images/vapes.vape10.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Peach Lemon',
            'quantity' => 10,
            'price' => 30.000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor a Durazno Limon',
            'image' => 'images/vapes.vape12.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Peach',
            'quantity' => 10,
            'price' => 30.000,
            'description' => '2500 puffs',
            'flavor' => 'Sabor a Durazno',
            'image' => 'images/vapes.vape14.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        
    }
}


