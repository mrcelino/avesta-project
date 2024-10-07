<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>Avesta</title>
</head>
<body >
  <header>
    {{-- Navbar --}}
    <x-navigation-menu>
      <x-navlink href="/" wire:navigate>Home</x-navlink>
      <x-navlink href="#" wire:navigate>Produk</x-navlink>
      <x-navlink href="#" wire:navigate>Tentang</x-navlink>
      <x-navlink href="#" wire:navigate>Hubungi</x-navlink>
      <div class="border rounded-3xl p-2 border-heading hover:bg-heading group">
        <x-navlink href="#" wire:navigate class="text-heading group-hover:text-white ">Login</x-navlink>
      </div>
      <div class="rounded-3xl p-2 bg-heading text-white hover:bg-white group hover:border hover:border-heading">
        <x-navlink href="#" wire:navigate class="text-white group-hover:text-heading">Register</x-navlink>
      </div>
    </x-navigation-menu>
  </header>
  <main>
    <!-- Component -->
    <x-hero></x-hero>
    <div class="text-center mx-20">
      <h2 class="font-extrabold text-3xl leading-[1.1] sm:text-3xl md:text-6xl my-20 text-heading">Mengapa memilih Avesta?</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="bg-pink h-[128px] p-6 rounded-3xl shadow-md flex items-center">
              <div class="bg-white p-4 rounded-2xl mr-4">
                  <img class="fas fa-tags text-4xl text-red-500" src="{{ asset('vector/Price.png') }}"></img>
              </div>
              <div class="text-left">
                  <h2 class="text-xl font-semibold text-white mb-2">Harga kompetitif</h2>
                  <p class="text-white">Dapatkan informasi harga ayam potong dari berbagai penjual secara real-time.</p>
              </div>
          </div>
          <div class="bg-pink h-[128px] p-6 rounded-3xl shadow-md flex items-center">
              <div class="bg-white p-4 rounded-2xl mr-4">
                <img class="fas fa-tags text-4xl text-red-500" src="{{ asset('vector/Secure.png') }}"></img>
              </div>
              <div class="text-left">
                  <h2 class="text-xl font-semibold text-white mb-2">Pembayaran Aman</h2>
                  <p class="text-white">Gunakan Avesta Coin untuk transaksi yang praktis dan terjamin.</p>
              </div>
          </div>
          <div class= "bg-pink p-6 rounded-3xl shadow-md flex items-center">
              <div class="bg-white p-4 rounded-2xl mr-4">
                <img class="fas fa-tags text-4xl text-red-500" src="{{ asset('vector/Quality.png') }}"></img>
              </div>
              <div class="text-left">
                  <h2 class="text-xl font-semibold text-white mb-2">Kualitas Terjamin</h2>
                  <p class="text-white">Kami hanya bekerja sama dengan penjual unggas terpilih dan terpercaya.</p>
              </div>
          </div>
          <div class="bg-pink p-6 rounded-3xl shadow-md flex items-center">
              <div class="bg-white p-4 rounded-2xl mr-4">
                <img class="fas fa-tags text-4xl text-red-500" src="{{ asset('vector/Easily.png') }}"></img>
              </div>
              <div class="text-left">
                  <h2 class="text-xl font-semibold text-white mb-2">Kemudahan Pemesanan</h2>
                  <p class="text-white">Pesan langsung dari website kami dengan proses yang cepat dan mudah.</p>
              </div>
          </div>
          <div class="bg-pink p-6 rounded-3xl shadow-md flex items-center">
              <div class="bg-white p-4 rounded-2xl mr-4">
                <img class="fas fa-tags text-4xl text-red-500" src="{{ asset('vector/Pickup.png') }}"></img>
              </div>
              <div class="text-left">
                  <h2 class="text-xl font-semibold text-white mb-2">Pengambilan Mandiri</h2>
                  <p class="text-white">Ambil pesanan Anda langsung di toko penjual pilihan Anda.</p>
              </div>
          </div>
          <div class="bg-pink p-6 rounded-3xl shadow-md flex items-center">
              <div class="bg-white p-4 rounded-2xl mr-4">
                <img class="fas fa-tags text-4xl text-red-500" src="{{ asset('vector/Feedback.png') }}"></img>
              </div>
              <div class="text-left">
                  <h2 class="text-xl font-semibold text-white mb-2">Ulasan Pelanggan</h2>
                  <p class="text-white">Bantu komunitas dengan memberikan ulasan setelah setiap transaksi.</p>
              </div>
          </div>
      </div>
    </div>
    <div class="mx-20">
        <div class="w-full mx-auto mt-20 h-[374px] justify-center flex rounded-3xl overflow-hidden">
            <!-- Left Section -->
            <div class="bg-pink w-4/6 p-8 flex flex-col justify-center">
                <h1 class="text-white text-3xl font-bold mb-4">Avesta</h1>
                <p class="text-white text-base leading-relaxed">
                    Avesta adalah sistem informasi pencarian unggas berbasis marketplace yang dirancang untuk mempermudah pembelian ayam potong di tingkat kecamatan. Sistem ini memungkinkan pemilik warung untuk mempromosikan ayam potong mereka, dan pembeli untuk mencari serta memesan secara online.
                </p>
            </div>
            <!-- Right Section -->
            <div class="bg-[#FF9FAD] w-2/6 flex justify-center items-center">
                <img src="{{ asset('image/Hero.png') }}" alt="Illustration" class="w-[200px] h-[150px]">
            </div>
        </div>
    </div>
    <div class="mx-20">
        <h2 class="font-extrabold text-3xl leading-[1.1] sm:text-3xl md:text-6xl my-20 text-heading text-center">Bagaimana Cara Pesan?</h2>
        <x-orderguide></x-orderguide>
    </div>
    <div class="mx-20">
        <h2 class="font-extrabold text-3xl leading-[1.1] sm:text-3xl md:text-6xl my-20 text-heading text-center">Daftar Mitra Toko</h2>
        <div class="w-full border-2 rounded-3xl h-[415px] shadow-md">

        </div>
    </div>
    <div class="mx-20">
        <h2 class="font-extrabold text-3xl leading-[1.1] sm:text-3xl md:text-6xl my-20 text-heading text-center ">Testimoni</h2>
        <x-testimonials></x-testimonials>
    </div>

    <x-content></x-content>
    <x-content2></x-content2>
    <x-faq></x-faq>
  </main>
  <footer>
    <x-footer></x-footer>
  </footer>  
</div>
</body>
</html>
