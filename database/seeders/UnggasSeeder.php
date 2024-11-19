<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Unggas;

class UnggasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $unggas = [
            [
                'jenis_unggas' => 'Dada Ayam 500 Gram',
                'harga_per_kg' => 20000,
                'deskripsi' => 'Daging dada ayam rendah lemak dan tinggi protein.',
                'stok' => 100,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Dada Ayam 800 Gram',
                'harga_per_kg' => 35000,
                'deskripsi' => 'Daging dada ayam rendah lemak dan tinggi protein.',
                'stok' => 90,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Dada Ayam 1000 Gram',
                'harga_per_kg' => 40000,
                'deskripsi' => 'Daging dada ayam rendah lemak dan tinggi protein.',
                'stok' => 80,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Dada Ayam 2000 Gram',
                'harga_per_kg' => 75000,
                'deskripsi' => 'Daging dada ayam rendah lemak dan tinggi protein.',
                'stok' => 70,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Paha Ayam 500 Gram',
                'harga_per_kg' => 20000,
                'deskripsi' => 'Paha ayam memiliki rasa lebih juicy dan berlemak.',
                'stok' => 150,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Paha Ayam 800 Gram',
                'harga_per_kg' => 35000,
                'deskripsi' => 'Paha ayam memiliki rasa lebih juicy dan berlemak.',
                'stok' => 140,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Paha Ayam 1000 Gram',
                'harga_per_kg' => 40000,
                'deskripsi' => 'Paha ayam memiliki rasa lebih juicy dan berlemak.',
                'stok' => 130,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Paha Ayam 2000 Gram',
                'harga_per_kg' => 75000,
                'deskripsi' => 'Paha ayam memiliki rasa lebih juicy dan berlemak.',
                'stok' => 120,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Ayam Utuh 2000 Gram',
                'harga_per_kg' => 95000,
                'deskripsi' => 'Ayam utuh segar siap untuk dimasak atau dipotong.',
                'stok' => 50,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Ayam Utuh 1000 Gram',
                'harga_per_kg' => 50000,
                'deskripsi' => 'Ayam utuh segar siap untuk dimasak atau dipotong.',
                'stok' => 40,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Ayam Utuh 1500 Gram',
                'harga_per_kg' => 75000,
                'deskripsi' => 'Ayam utuh segar siap untuk dimasak atau dipotong.',
                'stok' => 30,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Ayam Utuh 2200 Gram',
                'harga_per_kg' => 105000,
                'deskripsi' => 'Ayam utuh segar siap untuk dimasak atau dipotong.',
                'stok' => 20,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Sayap Ayam 500 Gram',
                'harga_per_kg' => 18000,
                'deskripsi' => 'Sayap ayam yang lezat untuk dimasak atau dijadikan camilan.',
                'stok' => 120,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Sayap Ayam 800 Gram',
                'harga_per_kg' => 26000,
                'deskripsi' => 'Sayap ayam yang lezat untuk dimasak atau dijadikan camilan.',
                'stok' => 150,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Sayap Ayam 1000 Gram',
                'harga_per_kg' => 32000,
                'deskripsi' => 'Sayap ayam yang lezat untuk dimasak atau dijadikan camilan.',
                'stok' => 140,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Sayap Ayam 2000 Gram',
                'harga_per_kg' => 60000,
                'deskripsi' => 'Sayap ayam yang lezat untuk dimasak atau dijadikan camilan.',
                'stok' => 160,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Ceker Ayam 500 Gram',
                'harga_per_kg' => 15000,
                'deskripsi' => 'Ceker ayam yang lezat untuk dimasak atau dijadikan camilan.',
                'stok' => 120,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Ceker Ayam 800 Gram',
                'harga_per_kg' => 22000,
                'deskripsi' => 'Ceker ayam yang lezat untuk dimasak atau dijadikan camilan.',
                'stok' => 150,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Ceker Ayam 1000 Gram',
                'harga_per_kg' => 28000,
                'deskripsi' => 'Ceker ayam yang lezat untuk dimasak atau dijadikan camilan.',
                'stok' => 140,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Ceker Ayam 2000 Gram',
                'harga_per_kg' => 55000,
                'deskripsi' => 'Ceker ayam yang lezat untuk dimasak atau dijadikan camilan.',
                'stok' => 160,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Ayam Fillet 500 Gram',
                'harga_per_kg' => 24000,
                'deskripsi' => 'Ayam fillet yang lezat untuk dimasak atau dijadikan camilan.',
                'stok' => 120,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Ayam Fillet 800 Gram',
                'harga_per_kg' => 36000,
                'deskripsi' => 'Ayam fillet yang lezat untuk dimasak atau dijadikan camilan.',
                'stok' => 150,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Ayam Fillet 1000 Gram',
                'harga_per_kg' => 45000,
                'deskripsi' => 'Ayam fillet yang lezat untuk dimasak atau dijadikan camilan.',
                'stok' => 140,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Ayam Fillet 2000 Gram',
                'harga_per_kg' => 85000,
                'deskripsi' => 'Ayam fillet yang lezat untuk dimasak atau dijadikan camilan.',
                'stok' => 160,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Jeroan 500 Gram',
                'harga_per_kg' => 16000,
                'deskripsi' => 'Jeroan yang lezat untuk dimasak atau dijadikan camilan.',
                'stok' => 120,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Jeroan 800 Gram',
                'harga_per_kg' => 26000,
                'deskripsi' => 'Jeroan yang lezat untuk dimasak atau dijadikan camilan.',
                'stok' => 150,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Jeroan 1000 Gram',
                'harga_per_kg' => 30000,
                'deskripsi' => 'Jeroan yang lezat untuk dimasak atau dijadikan camilan.',
                'stok' => 140,
                'id_warung' => 1,
            ],
            [
                'jenis_unggas' => 'Jeroan 2000 Gram',
                'harga_per_kg' => 55000,
                'deskripsi' => 'Jeroan yang lezat untuk dimasak atau dijadikan camilan.',
                'stok' => 160,
                'id_warung' => 1,
            ],
            // Tambahkan data lainnya
        ];

        foreach ($unggas as $item) {
            Unggas::create($item);
        }
    }
}
