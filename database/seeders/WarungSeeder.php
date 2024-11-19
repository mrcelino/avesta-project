<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class WarungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('warung')->insert([
            [
                'nama_warung' => 'Warung Ayam Sehat',
                'alamat_warung' => 'Jl. Sehat No. 23, Pogung Baru, Mlati, Sleman Yogyakarta',
                'id_user' => 2, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_warung' => 'Warung Ayam Sejahtera',
                'alamat_warung' => 'Jl. Merdeka No. 14, Sendangadi, Mlati, Sleman, Yogyakarta',
                'id_user' => 2, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
