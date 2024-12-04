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
            'Ayam Utuh' => 50000,
            'Dada Ayam' => 33000,
            'Ceker Ayam' => 24000,
            'Sayap Ayam' => 18000,
            'Ayam Fillet' => 20000,
            'Jeroan Ayam' => 15000,
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
                'quantity_kg' => $quantity_kg = $faker->numberBetween(10, 30), // Mendeklarasikan $quantity_kg dan mengisinya dengan Faker
                'total_price' => $produkList[$product] * $quantity_kg, // Total price berdasarkan quantity_kg
                'photo_url' => $fotoList[$product],
                'payment_method' => $faker->randomElement($paymentMethods),
                'status' => $faker->randomElement($statusList), // Menambahkan status
            ];
        }

        // Filter data based on the selected status
        $filteredData = match ($this->filterStatus) {
            'semua' => $dummyData,
            'berlangsung' => array_filter($dummyData, fn($item) => $item['status'] === 'Pesanan Berlangsung'),
            'berhasil' => array_filter($dummyData, fn($item) => $item['status'] === 'Pesanan Selesai'),
            'tidak_berhasil' => array_filter($dummyData, fn($item) => $item['status'] === 'Pesanan Gagal'),
            default => $dummyData,
        };

        return view('purchasehistory', [
            'filteredData' => $filteredData, // Kirimkan filteredData ke tampilan
        ]);
    }
    
}