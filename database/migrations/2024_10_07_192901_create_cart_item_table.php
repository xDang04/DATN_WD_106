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
        Schema::create('cart_item', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_cart');
            $table->foreign('id_cart')->references('id_cart')->on('cart')->onDelete('cascade');
            $table->unsignedInteger('id_product');
            $table->foreign('id_product')->references('id_product')->on('product')->onDelete('cascade');
            $table->unsignedInteger('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_item');
    }
};
