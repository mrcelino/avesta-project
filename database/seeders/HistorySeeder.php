<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
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
    }
}