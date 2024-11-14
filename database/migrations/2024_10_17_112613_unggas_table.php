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
        Schema::create('unggas', function (Blueprint $table) {
            $table->id('id_unggas');
            $table->string('foto_produk')->nullable();
            // $table->foreignId('id_warung')->constrained('warung', 'id_warung')->onDelete('cascade')->onUpdate('cascade');
            $table->string('jenis_unggas', 50);
            $table->text('deskripsi');
            $table->integer('penjualan');
            // $table->integer('stok');
            $table->decimal('harga_per_kg', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unggas');
    }
};