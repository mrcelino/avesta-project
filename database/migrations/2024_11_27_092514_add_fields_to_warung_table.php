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
        Schema::table('warung', function (Blueprint $table) {
            $table->string('kota', 100)->nullable();
            $table->string('kecamatan', 100)->nullable();
            $table->string('kelurahan', 100)->nullable();
            $table->string('kode_pos', 20)->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('nomor_hp', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('warung', function (Blueprint $table) {
            $table->dropColumn(['kota', 'kecamatan', 'kelurahan', 'kode_pos', 'deskripsi', 'nomor_hp']);
        });
    }
};