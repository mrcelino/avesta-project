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
        Schema::create('foto_unggas', function (Blueprint $table) {
            $table->id('id_photo_unggas');
            // $table->foreignId('id_unggas')->constrained('unggas')->onDelete('cascade')->onUpdate('cascade');
            $table->string('path', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_unggas');
    }
};
