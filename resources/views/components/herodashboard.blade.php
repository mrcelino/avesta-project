<section class="relative text-white overflow-hidden flex items-center justify-center bg-cover" style="background-image: url('/image/bghero.png'); height: 820px;">
  <div class="absolute top-0 left-0 w-56 ">
    <img data-aos="fade-down-right" data-aos-duration="3000" src="{{ asset('image/hero1.png') }}" alt="Kiri Atas" class="w-full h-full object-cover">
  </div>
  <div class="absolute top-16 right-0 w-72">
    <img data-aos="fade-down-left" data-aos-duration="3000" src="{{ asset('image/hero2.png') }}" alt="Kanan Atas" class="w-full h-full object-cover">
  </div>
  <div class="absolute bottom-0.5 left-0 w-56">
    <img data-aos="fade-up-right" data-aos-duration="3000" src="{{ asset('image/hero3.png') }}" alt="Kiri Bawah" class="w-full h-full object-cover">
  </div>
  <div class="absolute bottom-0 right-0 w-56">
    <img data-aos="fade-up-left" data-aos-duration="3000" src="{{ asset('image/hero4.png') }}" alt="Kanan Bawah" class="w-full h-full object-cover">
  </div>
  
  <div class="container mx-auto px-4 py-24 md:py-32 relative z-10">
      <div class="flex justify-center md:flex-row items-center">
          <div class="w-full mb-12 md:mb-0 text-center">
              <h1 class="text-5xl md:text-6xl font-bold mt-20 mb-6 leading-10">
                  Temukan Ayam Potong <br>dengan Harga Terbaik di Avesta
              </h1>
              <p class="text-xl mb-8 text-white leading-normal">
                  Avesta memudahkan Anda mencari ayam potong dengan harga terbaik di desa <br>
                  Kami bermitra dengan penjual unggas terpilih untuk menawarkan harga yang kompetitif setiap hari.
              </p>
              <div class="bg-white mx-auto rounded-3xl border-2 shadow-xl p-8 w-full max-w-md">
                <h1 class="text-center text-pink text-2xl font-bold mb-6">Cari Daging Sekarang</h1>
                <form method="GET" action="{{ route('cariayam') }}">
                    <div class="flex items-center space-x-2">
                        <input type="text" wire:model="searchTerm" name="q" placeholder="Daging ayam" class="bg-gray-100 rounded-full px-4 py-2 text-gray-400 focus:outline-none flex-grow shadow-inner">
                        <button type="submit" class="bg-pink text-white rounded-full px-6 py-2 shadow-lg">Cari</button>
                    </div>
                </form>
            </div>
          </div>
      </div>
  </div>
  <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2">
    <img data-aos="fade-up" data-aos-duration="3000" src="{{ asset('image/hero5.png') }}" alt="Gambar di Tengah" class="w-96 h-auto object-contain">
  </div>
</section>
