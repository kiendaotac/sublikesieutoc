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
        Schema::create('voucher_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Transaction::class);
            $table->foreignIdFor(\App\Models\Voucher::class);
            $table->unsignedBigInteger('order_amount');
            $table->unsignedBigInteger('discount_amount');
            $table->unsignedBigInteger('amount');
            $table->string('status')->default('used');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voucher_transactions');
    }
};
