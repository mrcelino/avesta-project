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
        Schema::create('foto_users', function (Blueprint $table) {
            $table->id('id_foto_user'); // Primary key untuk tabel ini
            $table->foreignId('id_user') // Kolom foreign key
                  ->constrained('users', 'id_user') // Tentukan tabel dan kolom yang direferensikan
                  ->onDelete('cascade'); // Tambahkan onDelete cascade
            $table->string('path', 255); // Kolom untuk menyimpan path foto
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_users');
    }
};
