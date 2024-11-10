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
        Schema::create('history_payment', function (Blueprint $table) {
            $table->id('id_history_payment');
            // $table->foreignId('id_user')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('id_order')->constrained('orders')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('id_payment')->constrained('payments')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamp('tanggal_history');
            $table->enum('status_history', ['pending', 'completed', 'failed', 'canceled']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_payment');
    }
};
