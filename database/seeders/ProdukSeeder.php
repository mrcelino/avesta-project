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
            'Dada Ayam' => 500,
            'Ceker Ayam' => 200,
            'Sayap Ayam' => 300,
            'Ayam Fillet' => 450,
            'Jeroan Ayam' => 150,
        ];

        $fotoList = [
            'Ayam Utuh' => '/uploads/fotos/01JC0M03ENDMRAERST6B19VGAC.png',
            'Dada Ayam' => '/uploads/fotos/01JC0M03ENDMRAERST6B19VGAC.png',
            'Ceker Ayam' => '/uploads/fotos/01JC0M03ENDMRAERST6B19VGAC.png',
            'Sayap Ayam' => '/uploads/fotos/01JC0M03ENDMRAERST6B19VGAC.png',
            'Ayam Fillet' => '/uploads/fotos/01JC0M03ENDMRAERST6B19VGAC.png',
            'Jeroan Ayam' => '/uploads/fotos/01JC0M03ENDMRAERST6B19VGAC.png',
        ];

        $deskripsiList = [
            'Ayam Utuh' => 'Ayam utuh dengan kualitas terbaik, siap dimasak untuk berbagai hidangan.',
            'Dada Ayam' => 'Dada ayam fillet tanpa tulang, sempurna untuk sajian ayam panggang atau ayam goreng.',
            'Ceker Ayam' => 'Ceker ayam segar, cocok untuk berbagai jenis masakan, terutama sup ayam.',
            'Sayap Ayam' => 'Sayap ayam enak untuk digoreng atau dipanggang, cocok sebagai camilan atau lauk.',
            'Ayam Fillet' => 'Fillet ayam tanpa tulang, sangat mudah diolah dan kaya akan protein.',
            'Jeroan Ayam' => 'Jeroan ayam segar, cocok untuk masakan tradisional atau sup.',
        ];

        // Mengambil data dari tabel `warung`
        $warungs = DB::table('warung')->select('id_warung', 'nama_warung')->get();

        foreach (range(1, 24) as $index) {
            $produk = array_rand($produkList); // Memilih produk secara acak

            DB::table('unggas')->insert([
                'foto_unggas' => $fotoList[$produk], // Mengambil foto sesuai dengan produk
                'jenis_unggas' => $produk . ' - ' . $produkList[$produk] . ' gram',
                'harga_per_kg' => rand(10000, 50000), // Menyimpan harga sebagai angka saja
                'stok' => rand(10, 40),
                'deskripsi' => $deskripsiList[$produk], // Menambahkan deskripsi untuk produk
                'id_warung' => $warungs->random()->id_warung, // Mengambil id_warung secara acak
                'penjualan' => rand(0, 30),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}