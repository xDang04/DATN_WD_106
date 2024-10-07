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
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id_product');
            $table->unsignedInteger('id_category');
            $table->foreign('id_category')->references('id_category')->on('category')->onDelete('cascade');
            $table->string('name', 250);
            $table->float('price', 8,2);
            $table->string('image', 500)->nullable();
            $table->unsignedInteger('stock');
            $table->string('description', 500);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
