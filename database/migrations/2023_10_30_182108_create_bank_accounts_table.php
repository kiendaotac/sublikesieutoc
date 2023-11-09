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
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('bank_name');
            $table->string('short_name');
            $table->string('bank_logo');
            $table->string('bank_code');
            $table->string('bin');
            $table->string('card_name');
            $table->string('card_number');
            $table->unsignedInteger('amount')->nullable();
            $table->string('command')->nullable();
            $table->string('template');
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_accounts');
    }
};
