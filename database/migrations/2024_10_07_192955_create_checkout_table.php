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
        Schema::create('checkout', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
            $table->unsignedInteger('id_order');
            $table->foreign('id_order')->references('id_order')->on('order')->onDelete('cascade');
            $table->string('payment_method');
            $table->string('payment_status');
            $table->decimal('total_amount', 10, 2);
            $table->string('shipping_address');
            $table->date('checkout_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkout');
    }
};
