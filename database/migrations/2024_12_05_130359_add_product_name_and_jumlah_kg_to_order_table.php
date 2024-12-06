<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProductNameAndJumlahKgToOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('product_name')->after('id_order'); // Menambahkan kolom product_name setelah id
            $table->decimal('jumlah_kg', 8, 2)->after('product_name'); // Menambahkan kolom jumlah_kg dengan tipe decimal
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order', function (Blueprint $table) {
            $table->dropColumn(['product_name', 'jumlah_kg']); // Menghapus kolom product_name dan jumlah_kg
        });
    }
}