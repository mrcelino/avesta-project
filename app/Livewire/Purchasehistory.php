<?php

namespace App\Livewire;

use Livewire\Component;
use Faker\Factory as Faker;

class Purchasehistory extends Component
{
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
        
        $deskripsiList = [
            'Ayam Utuh' => 'Ayam utuh dengan kualitas terbaik, siap dimasak untuk berbagai hidangan.',
            'Dada Ayam' => 'Dada ayam fillet tanpa tulang, sempurna untuk sajian ayam panggang atau ayam goreng.',
            'Ceker Ayam' => 'Ceker ayam segar, cocok untuk berbagai jenis masakan, terutama sup ayam.',
            'Sayap Ayam' => 'Sayap ayam enak untuk digoreng atau dipanggang, cocok sebagai camilan atau lauk.',
            'Ayam Fillet' => 'Fillet ayam tanpa tulang, sangat mudah diolah dan kaya akan protein.',
            'Jeroan Ayam' => 'Jeroan ayam segar, cocok untuk masakan tradisional atau sup.',
        ];
    
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
                'description' => $deskripsiList[$product],
                'payment_method' => $faker->randomElement($paymentMethods),
            ];
        }
    
        // Create a dummy invoice object or array
        $invoice = [
            'number' => 'INV/' . now()->format('Ymd') . '/12345',
            'date' => now()->format('Y-m-d'),
            'payment_method' => 'Mandiri'
        ];
    
        return view('purchasehistory', [
            'dummyData' => $dummyData,
            'invoice' => $invoice,
        ]);
    }
    
}