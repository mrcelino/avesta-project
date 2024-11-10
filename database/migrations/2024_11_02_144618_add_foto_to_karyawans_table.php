<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('karyawans', function (Blueprint $table) {
            $table->string('foto')->nullable(); // Menambahkan kolom foto
        });
    }
    
    public function down()
    {
        Schema::table('karyawans', function (Blueprint $table) {
            $table->dropColumn('foto'); // Menghapus kolom foto saat rollback
        });
    }
    
};