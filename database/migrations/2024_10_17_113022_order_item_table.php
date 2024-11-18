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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id('id_order_item');
                
            // $table->foreignId('id_order')->constrained('orders')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('id_unggas')->constrained('unggas')->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('jumlah_kg', 5, 2);
            $table->decimal('harga_total_per_item', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};