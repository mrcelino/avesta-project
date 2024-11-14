<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFotoUnggasToUnggasTable extends Migration
{
    public function up()
    {
        Schema::table('unggas', function (Blueprint $table) {
            $table->string('foto_unggas')->nullable(); // Menambahkan kolom foto_unggas
        });
    }

    public function down()
    {
        Schema::table('unggas', function (Blueprint $table) {
            $table->dropColumn('foto_unggas'); // Menghapus kolom foto_unggas jika rollback
        });
    }
}