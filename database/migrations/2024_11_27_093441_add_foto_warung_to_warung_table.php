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
            $table->string('foto_warung', 255)->nullable()->after('alamat_warung');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('warung', function (Blueprint $table) {
            $table->dropColumn('foto_warung');
        });
    }
};