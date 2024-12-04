<?php

namespace App\Livewire;
use Livewire\Attributes\Url;
use Livewire\Component;
use Faker\Factory as Faker;

class Purchasehistory extends Component
{
    #[Url('sortBy')]
    public $filterStatus = 'semua'; // Status filter default

    public function filterByStatus($status)
    {
        $this->filterStatus = $status; // Mengubah filter berdasarkan tombol yang diklik
    }
    public function render()
    {
        $faker = Faker::create();
    
        // Daftar metode pembayaran
        $paymentMethods = ['Mandiri', 'BCA', 'BRI', 'BNI', 'BSI', 'Danamon'];
    
        // Data produk, foto, dan deskripsi
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
        
        $statusList = ['Pesanan Berlangsung', 'Pesanan Gagal', 'Pesanan Selesai'];
        // Generate 10 dummy items
        $dummyData = [];
        for ($i = 0; $i < 10; $i++) {
            $product = array_rand($produkList);
            $dummyData[] = [
                'invoice_number' => 'INV/' . now()->format('Ymd') . '/DF/' . $faker->unique()->numberBetween(10000, 99999),
                'purchase_date' => $faker->dateTimeThisYear()->format('Y-m-d'),
                'product_name' => $product,
                'price_per_kg' => $produkList[$product],
                'quantity_kg' => $faker->numberBetween(10, 100),
                'total_price' => $produkList[$product] * $faker->numberBetween(10, 100),
                'photo_url' => $fotoList[$product],
                'payment_method' => $faker->randomElement($paymentMethods),
                'status' => $faker->randomElement($statusList), // Menambahkan status
            ];
        }

        // Filter data based on the selected status
        $filteredData = match ($this->filterStatus) {
            'semua' => $dummyData,
            'berlangsung' => array_filter($dummyData, fn($item) => $item['status'] === 'Pesanan Berlangsung'),
            'berhasil' => array_filter($dummyData, fn($item) => $item['status'] === 'Pesanan Gagal'),
            'tidak_berhasil' => array_filter($dummyData, fn($item) => $item['status'] === 'Pesanan Selesai'),
            default => $dummyData,
        };

        return view('purchasehistory', [
            'filteredData' => $filteredData, // Kirimkan filteredData ke tampilan
        ]);
    }
    
}