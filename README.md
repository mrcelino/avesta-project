<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://i.ibb.co.com/520S5J9/avesta.png" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Avesta

Avesta adalah sebuah website aplikasi marketplace unggas khususnya ayam potong yang bekerja sama dengan beberapa penjual ayam potong di suatu desa atau kecamatan. Aplikasi ini memiliki fitur untuk dapat menyediakan harga unggas yang terbaik setiap hari nya dan dapat melakukan booking/pemesanan secara online sehingga bisa membantu pelaku usaha unggas dan juga masyarakat yang menginginkan harga unggas terbaik

## Instalasi Avesta

### Langkah 1: Clone Proyek Laravel
```bash
git clone https://github.com/mrcelino/avesta-project.git
```

### Langkah 2: Masuk ke Direktori Proyek
```bash
cd avesta-project
```

### Langkah 3: Instal Dependensi
```bash
composer install
```

### Langkah 4: Konfigurasi Environment
1. Ubah nama file `.env.example` menjadi `.env`.
2. Sesuaikan pengaturan database pada file `.env`.

### Langkah 5: Generate Key Aplikasi
```bash
php artisan key:generate
```

### Langkah 6: Migrate database
Mulai database server kemudian jalan perintah berikut 
```bash
php artisan migrate
```

### Langkah 7: Konfigurasi Vite
1. Jalankan perintah berikut 
```bash
npm i 
```
2. Kemudian jalankan perintah berikut
```bash
npm run dev
```
3. Buka terminal baru dan jalankan perintah (jalankan jika proyek telah selesai total)
```bash
npm run build
```

### Langkah 8: Jalankan Aplikasi
```bash
php artisan serve
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
