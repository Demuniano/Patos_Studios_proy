<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->BigInteger('quantity');
            $table->float('price');
            $table->string('description');
            $table->string('flavor');
            $table->timestamps();
        });
        
        for ($i = 1; $i <= 5; $i++) {
            DB::table('products')->insert([
                'name' => "Producto $i",
                'quantity' => 10,
                'price' => 19.99, 
                'description' => "Descripción del Producto $i",
                'flavor' => "Sabor $i",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

