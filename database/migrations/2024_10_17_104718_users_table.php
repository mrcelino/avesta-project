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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user');
            // $table->unsignedBigInteger('id_warung')->nullable();
            $table->string('nama_depan', 100);
            $table->string('nama_belakang', 100);
            $table->string('email', 100)->unique();
            $table->string('no_telepon', 15);
            $table->string('alamat', 255)->nullable();
            $table->string('password', 100);
            $table->enum('role', ['pemilik', 'karyawan', 'user']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
