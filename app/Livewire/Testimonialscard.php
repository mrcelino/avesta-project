<?php

namespace App\Livewire;

use Livewire\Component;

class Testimonialscard extends Component
{
    public $cards = []; // Properti untuk menyimpan data card yang sedang ditampilkan

    public function mount()
    {
        // Data default untuk card yang akan ditampilkan pertama kali
        $this->cards = [
            [
                'image' => 'image/Testi1.png',
                'review' => '"Avesta benar-benar mempermudah hidup saya! Saya bisa mendapatkan ayam potong dengan harga terbaik tanpa harus keliling pasar."',
                'name' => 'Mila Suryani',
                'job' => 'Ibu Rumah Tangga',
            ],
            [
                'image' => 'image/Testi2.png',
                'review' => '"Dengan Avesta, saya tidak perlu lagi repot-repot menawar. Semua harga transparan, proses pesan cepat, dan tinggal ambil di penjual."',
                'name' => 'Rudi Santoso',
                'job' => 'Karyawan Swasta',
            ],
        ];
    }

    public function updateCards($index)
    {
        // Data yang berbeda untuk setiap lingkaran
        $data = [
            0 => [
                [
                    'image' => 'image/Testi1.png',
                    'review' => '"Avesta benar-benar mempermudah hidup saya! Saya bisa mendapatkan ayam potong dengan harga terbaik tanpa harus keliling pasar."',
                    'name' => 'Mila Suryani',
                    'job' => 'Ibu Rumah Tangga',
                ],
                [
                    'image' => 'image/Testi2.png',
                    'review' => '"Dengan Avesta, saya tidak perlu lagi repot-repot menawar. Semua harga transparan, proses pesan cepat, dan tinggal ambil di penjual."',
                    'name' => 'Rudi Santoso',
                    'job' => 'Karyawan Swasta',
                ],
            ],
            1 => [
                [
                    'image' => 'image/Testi3.png',
                    'review' => '"Avesta sangat membantu dalam keseharian saya. Dulu harus berkeliling, sekarang semua mudah dalam satu aplikasi."',
                    'name' => 'Ratna Pratiwi',
                    'job' => 'Pekerja Kantoran',
                ],
                [
                    'image' => 'image/Testi4.png',
                    'review' => '"Dengan Avesta, saya bisa pesan ayam potong dengan cepat tanpa perlu tawar-menawar di pasar. Sangat praktis!"',
                    'name' => 'Agus Wijaya',
                    'job' => 'Pengemudi Ojek Online',
                ],
            ],
            2 => [
                [
                    'image' => 'image/Testi5.png',
                    'review' => '"Harga yang transparan di Avesta membuat saya tenang berbelanja, tanpa khawatir ada tambahan biaya tak terduga."',
                    'name' => 'Budi Hartono',
                    'job' => 'Wiraswasta',
                ],
                [
                    'image' => 'image/Testi6.png',
                    'review' => '"Sebagai ibu rumah tangga, Avesta sangat membantu saya menghemat waktu berbelanja. Harga jelas dan prosesnya cepat!"',
                    'name' => 'Siti Aminah',
                    'job' => 'Ibu Rumah Tangga',
                ],
            ],
            3 => [
                [
                    'image' => 'image/Testi7.png',
                    'review' => '"Waktu saya lebih efisien dengan Avesta. Tak perlu keluar kantor untuk belanja bahan masak. Semua tinggal pesan dan ambil!"',
                    'name' => 'Andini Putri',
                    'job' => 'Aparatur Sipil Negara',
                ],
                [
                    'image' => 'image/Testi8.png',
                    'review' => '"Avesta memudahkan saya untuk mendapatkan ayam segar dengan harga yang pasti. Tak perlu lagi repot di pasar."',
                    'name' => 'Sri Mulyani',
                    'job' => 'Ibu Rumah Tangga',
                ],
            ],
            // Tambahkan lebih banyak data sesuai kebutuhan
        ];

        // Mengubah data card berdasarkan lingkaran yang diklik
        $this->cards = $data[$index];
    }

    public function render()
    {
        return view('livewire.testimonialscard');
    }
}