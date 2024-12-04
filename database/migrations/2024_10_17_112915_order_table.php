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
            $table->id('id_order');
            // $table->foreignId('id_user')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('id_warung')->constrained('warung')->onDelete('cascade')->onUpdate('cascade');
            $table->date('tanggal_order');
            $table->string('catatan', 255)->nullable();
            $table->decimal('total_harga', 10, 2);
            $table->enum('status_order', ['processed', 'completed', 'canceled']);
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
