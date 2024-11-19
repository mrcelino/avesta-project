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
        Schema::create('payments', function (Blueprint $table) {
            $table->id('id_payment');
            // $table->foreignId('id_order')->constrained('orders')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('metode_payment', ['transfer', 'cash']);
            $table->decimal('total_payment', 10, 2);
            $table->timestamp('tenggat_waktu');
            $table->enum('status_payment', ['pending', 'completed', 'failed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
