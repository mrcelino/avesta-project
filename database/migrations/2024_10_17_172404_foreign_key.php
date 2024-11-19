<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        // Menambahkan FK ke tabel users
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('id_warung')->nullable();
            $table->foreign('id_warung')->references('id_warung')->on('warung')->onDelete('set null')->onUpdate('cascade');
        });

        // Menambahkan FK ke tabel warung
        Schema::table('warung', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('restrict')->onUpdate('cascade');
        });

        // Menambahkan FK ke tabel admin
        Schema::table('admin', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('restrict')->onUpdate('cascade');
        });

        // Menambahkan FK ke tabel karyawan
        Schema::table('karyawan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('restrict')->onUpdate('cascade');        
        });

        // Menambahkan FK ke tabel reset_password
        Schema::table('reset_password', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade')->onUpdate('cascade');        
        });

        // Menambahkan FK ke tabel unggas
        Schema::table('unggas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_warung');
            $table->foreign('id_warung')->references('id_warung')->on('warung')->onDelete('cascade')->onUpdate('cascade');        
        });

        // Menambahkan FK ke tabel foto_unggas
        Schema::table('foto_unggas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_unggas');
            $table->foreign('id_unggas')->references('id_unggas')->on('unggas')->onDelete('cascade')->onUpdate('cascade');        
        });

        // Menambahkan FK ke tabel keranjang
        Schema::table('keranjang', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_unggas');
            $table->foreign('id_unggas')->references('id_unggas')->on('unggas')->onDelete('cascade')->onUpdate('cascade');        
        });

        // Menambahkan FK ke tabel order
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_warung');
            $table->foreign('id_warung')->references('id_warung')->on('warung')->onDelete('cascade')->onUpdate('cascade');        
        });

        // Menambahkan FK ke tabel order_item
        Schema::table('order_items', function (Blueprint $table) {
            $table->unsignedBigInteger('id_order');
            $table->foreign('id_order')->references('id_order')->on('orders')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_unggas');
            $table->foreign('id_unggas')->references('id_unggas')->on('unggas')->onDelete('cascade')->onUpdate('cascade');        
        });

        // Menambahkan FK ke tabel payment
        Schema::table('payments', function (Blueprint $table) {
            $table->unsignedBigInteger('id_order');
            $table->foreign('id_order')->references('id_order')->on('orders')->onDelete('cascade')->onUpdate('cascade');        
        });

        // Menambahkan FK ke tabel history_payment
        Schema::table('history_payment', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_order');
            $table->foreign('id_order')->references('id_order')->on('orders')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_payment');
            $table->foreign('id_payment')->references('id_payment')->on('payments')->onDelete('cascade')->onUpdate('cascade');        
        });
    }

    public function down(): void {
        // Menghapus FK dari tabel users
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['id_warung']);
        });

        // Menghapus FK dari tabel warung
        Schema::table('warung', function (Blueprint $table) {
            $table->dropForeign(['id_user']);
        });

        // Menghapus FK dari tabel admin
        Schema::table('admin', function (Blueprint $table) {
            $table->dropForeign(['id_user']);
        });

        // Menghapus FK dari tabel karyawan
        Schema::table('karyawan', function (Blueprint $table) {
            $table->dropForeign(['id_user']);
        });

        // Menghapus FK dari tabel reset_password
        Schema::table('reset_password', function (Blueprint $table) {
            $table->dropForeign(['id_user']);
        });

        // Menghapus FK dari tabel unggas
        Schema::table('unggas', function (Blueprint $table) {
            $table->dropForeign(['id_warung']);
        });

        // Menghapus FK dari tabel foto_unggas
        Schema::table('foto_unggas', function (Blueprint $table) {
            $table->dropForeign(['id_unggas']);
        });

        // Menghapus FK dari tabel keranjang
        Schema::table('keranjang', function (Blueprint $table) {
            $table->dropForeign(['id_user']);
            $table->dropForeign(['id_unggas']);
        });

        // Menghapus FK dari tabel order
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['id_user']);
            $table->dropForeign(['id_warung']);
        });

        // Menghapus FK dari tabel order_item
        Schema::table('order_items', function (Blueprint $table) {
            $table->dropForeign(['id_order']);
            $table->dropForeign(['id_unggas']);
        });

        // Menghapus FK dari tabel payment
        Schema::table('payments', function (Blueprint $table) {
            $table->dropForeign(['id_order']);
        });

        // Menghapus FK dari tabel history_payment
        Schema::table('history_payment', function (Blueprint $table) {
            $table->dropForeign(['id_user']);
            $table->dropForeign(['id_order']);
            $table->dropForeign(['id_payment']);
        });
    }
};
