<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FotoUnggas;

class FotoUnggasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fotoUnggas = [
            ['id_unggas' => 2, 'path' => 'images/chicken.png'],
            ['id_unggas' => 3, 'path' => 'images/chicken.png'],
            ['id_unggas' => 4, 'path' => 'images/chicken.png'],
            ['id_unggas' => 5, 'path' => 'images/chicken.png'],
            ['id_unggas' => 6, 'path' => 'images/chicken.png'],
            ['id_unggas' => 7, 'path' => 'images/chicken.png'],
            ['id_unggas' => 8, 'path' => 'images/chicken.png'],
            ['id_unggas' => 9, 'path' => 'images/chicken.png'],
            ['id_unggas' => 10, 'path' => 'images/chicken.png'],
            ['id_unggas' => 11, 'path' => 'images/chicken.png'],
            ['id_unggas' => 12, 'path' => 'images/chicken.png'],
            ['id_unggas' => 13, 'path' => 'images/chicken.png'],
            ['id_unggas' => 14, 'path' => 'images/chicken.png'],
            ['id_unggas' => 15, 'path' => 'images/chicken.png'],
            ['id_unggas' => 16, 'path' => 'images/chicken.png'],
            ['id_unggas' => 17, 'path' => 'images/chicken.png'],
            ['id_unggas' => 18, 'path' => 'images/chicken.png'],
            ['id_unggas' => 19, 'path' => 'images/chicken.png'],
            ['id_unggas' => 20, 'path' => 'images/chicken.png'],
            ['id_unggas' => 21, 'path' => 'images/chicken.png'],
            ['id_unggas' => 22, 'path' => 'images/chicken.png'],
            ['id_unggas' => 23, 'path' => 'images/chicken.png'],
            ['id_unggas' => 24, 'path' => 'images/chicken.png'],
            ['id_unggas' => 25, 'path' => 'images/chicken.png'],
            ['id_unggas' => 26, 'path' => 'images/chicken.png'],
            ['id_unggas' => 27, 'path' => 'images/chicken.png'],
            ['id_unggas' => 28, 'path' => 'images/chicken.png'],
            ['id_unggas' => 29, 'path' => 'images/chicken.png'],
        ];

        foreach ($fotoUnggas as $foto) {
            FotoUnggas::create($foto);
        }
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FotoUnggas;

class FotoUnggasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fotoUnggas = [
            ['id_unggas' => 1, 'path' => 'images/chicken.png'],
            ['id_unggas' => 2, 'path' => 'images/chicken.png'],
            ['id_unggas' => 3, 'path' => 'images/chicken.png'],
            ['id_unggas' => 4, 'path' => 'images/chicken.png'],
            ['id_unggas' => 5, 'path' => 'images/chicken.png'],
            ['id_unggas' => 6, 'path' => 'images/chicken.png'],
            ['id_unggas' => 7, 'path' => 'images/chicken.png'],
            ['id_unggas' => 8, 'path' => 'images/chicken.png'],
            ['id_unggas' => 9, 'path' => 'images/chicken.png'],
            ['id_unggas' => 10, 'path' => 'images/chicken.png'],
            ['id_unggas' => 11, 'path' => 'images/chicken.png'],
            ['id_unggas' => 12, 'path' => 'images/chicken.png'],
            ['id_unggas' => 13, 'path' => 'images/chicken.png'],
            ['id_unggas' => 14, 'path' => 'images/chicken.png'],
            ['id_unggas' => 15, 'path' => 'images/chicken.png'],
            ['id_unggas' => 16, 'path' => 'images/chicken.png'],
            ['id_unggas' => 17, 'path' => 'images/chicken.png'],
            ['id_unggas' => 18, 'path' => 'images/chicken.png'],
            ['id_unggas' => 19, 'path' => 'images/chicken.png'],
            ['id_unggas' => 20, 'path' => 'images/chicken.png'],
            ['id_unggas' => 21, 'path' => 'images/chicken.png'],
            ['id_unggas' => 22, 'path' => 'images/chicken.png'],
            ['id_unggas' => 23, 'path' => 'images/chicken.png'],
            ['id_unggas' => 24, 'path' => 'images/chicken.png'],
            ['id_unggas' => 25, 'path' => 'images/chicken.png'],
            ['id_unggas' => 26, 'path' => 'images/chicken.png'],
            ['id_unggas' => 27, 'path' => 'images/chicken.png'],
            ['id_unggas' => 28, 'path' => 'images/chicken.png'],
            
        ];

        foreach ($fotoUnggas as $foto) {
            FotoUnggas::create($foto);
        }
    }
}
