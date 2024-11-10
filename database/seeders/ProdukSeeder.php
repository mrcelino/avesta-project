<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        $produkList = [
            'Ayam Utuh' => 1000,
            'Dada Ayam Fillet' => 500,
            'Ceker Ayam' => 200,
            'Sayap Ayam' => 300,
            'Ayam Fillet' => 450,
            'Jeroan Ayam' => 150,
        ];

        $fotoList = [
            'Ayam Utuh' => '/uploads/fotos/01JC0M03ENDMRAERST6B19VGAC.png',
            'Dada Ayam Fillet' => '/uploads/fotos/01JC0M03ENDMRAERST6B19VGAC.png',
            'Ceker Ayam' => '/uploads/fotos/01JC0M03ENDMRAERST6B19VGAC.png',
            'Sayap Ayam' => '/uploads/fotos/01JC0M03ENDMRAERST6B19VGAC.png',
            'Ayam Fillet' => '/uploads/fotos/01JC0M03ENDMRAERST6B19VGAC.png',
            'Jeroan Ayam' => '/uploads/fotos/01JC0M03ENDMRAERST6B19VGAC.png',
        ];

        foreach (range(1, 3) as $index) {
            $produk = array_rand($produkList); // Memilih produk secara acak
            DB::table('produks')->insert([
                'foto_produk' => $fotoList[$produk], // Menyertakan foto yang sesuai
                'info_produk' => $produk . ' - ' . $produkList[$produk] . ' gram', // Menggunakan gram yang sudah ditentukan
                'harga' => number_format(rand(10000, 50000), 0, ',', '.'), // Format harga dengan titik sebagai pemisah ribuan
                'stok' => rand(1, 20), // Stok acak antara 1 hingga 20
                'penjualan' => rand(0, 10), // Penjualan acak antara 0 hingga 10
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}