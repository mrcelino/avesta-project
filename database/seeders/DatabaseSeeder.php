<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ProdukSeeder::class);
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'nama_depan' => 'vion',
            'nama_belakang' => 'lovada',
            'email' => 'vion@gmail.com',
            'no_telepon' => '085743340008',
            'password' => '12345678',
        ]);
    }
}