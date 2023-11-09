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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('service_id');
            $table->bigInteger('user_id');
            $table->string('service_type');
            $table->string('target_identify');
            $table->integer('target');
            $table->integer('original');
            $table->bigInteger('price');
            $table->bigInteger('amount');
            $table->json('extra_data')->nullable();
            $table->string('note')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
