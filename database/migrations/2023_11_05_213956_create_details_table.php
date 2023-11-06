<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("order_id")->comment("Id de la orden");
            $table->foreign("order_id")->references("id")->on("orders");
            $table->integer("cant")->comment("Cantidad de productos");
            $table->unsignedBigInteger("product_id")->comment("Id del producto");
            $table->foreign("product_id")->references("id")->on("products");
            $table->float("unitp")->comment("Precio de unidad");
            $table->float("totalp")->comment("Precio total");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
