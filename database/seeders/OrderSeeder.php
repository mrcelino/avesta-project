<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    public function run()
    {
        // Path gambar default
        $imagePath = 'uploads/fotos/chicken.png';

        // Daftar produk
        $produkList = [
            'Ayam Utuh',
            'Dada Ayam',
            'Ceker Ayam',
            'Sayap Ayam',
            'Ayam Fillet',
            'Jeroan Ayam',
        ];

        // Pilihan catatan
        $catatanList = [
            'Dipisahkan bagian sayap',
            'Dipilih ayam segar',
            'Dipacking rapih',
            'Dipisah kulit dan daging',
            'Dipisah tulang dan daging',
            'Dipotong kecil-kecil',
        ];

        // Contoh data untuk seeding
        $orders = [];

        for ($i = 1; $i <= 10; $i++) { // Seed 10 data contoh
            $orders[] = [
                'id_order' => $i,
                'product_name' => collect($produkList)->random(), // Pilih produk secara acak
                'jumlah_kg' => rand(1, 10), // Jumlah kilogram acak 1-10
                'tanggal_order' => now()->subDays(rand(1, 30)), // Tanggal acak dalam 30 hari terakhir
                'catatan' => collect($catatanList)->random(), // Pilih catatan secara acak
                'total_harga' => rand(10000, 100000), // Harga acak
                'status_order' => collect(['processed', 'completed', 'canceled'])->random(), // Status acak
                'foto_order' => $imagePath, // Gambar tetap chicken.png
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => rand(1, 2), // ID user acak
                'id_warung' => rand(1, 3), // ID warung acak
            ];
        }

        DB::table('orders')->insert($orders);
    }
}