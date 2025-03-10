<x-layouts.app>
  <div>
    <header>
      <x-navmitra>
        <x-navlink href="#">Beranda</x-navlink>
        <x-navlink href="{{ route('product') }}" :useWireNavigate="true">Dashboard</x-navlink>
        <x-navlink href="{{ route('about') }}" :useWireNavigate="true">Tentang</x-navlink>
        <x-navlink href="{{ route('contact') }}" :useWireNavigate="true">Hubungi</x-navlink>
        @guest
        <div class="border rounded-3xl p-2 border-heading hover:bg-heading group mr-2">
          <x-navlink href="{{ route('login') }}" :useWireNavigate="true" class="text-heading group-hover:text-white">Login</x-navlink>
        </div>
        <div class="rounded-3xl p-2 bg-heading text-white hover:bg-white group hover:border hover:border-heading">
          <x-navlink href="{{ route('register', ['role' => 'pemilik']) }}" :useWireNavigate="true" class="text-white group-hover:text-heading">Register</x-navlink>
        </div>
        @endguest
        @auth
        <x-dropdown>
            <div class="border-pink border-2 rounded-xl mt-2 mb-2 p-2">
                <p class="font-semibold text-lg text-pink">{{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }}</p>
                <p class="text-base text-pink">{{ Auth::user()->email }}</p>
            </div>
            <x-slot:trigger>
              <x-button class="ml-5 btn-circle btn-outline group hover:bg-pink stroke-none border-2 border-heading hover:border-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FB657A" class="size-6 group-hover:fill-white">
                    <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                  </svg>                     
              </x-button>
            </x-slot:trigger>
            <x-menu-item wire:navigate href="{{ route('settings') }}" class="hover:bg-pink hover:text-white active:bg-pink" title="Pengaturan" />
            <x-menu-item wire:navigate href="{{route('logout')}}" class="hover:bg-pink hover:text-white active:bg-heading" title="Logout" />
        </x-dropdown>
        @endauth
      </x-navmitra>
    </header>
    <main>
      <div class="bg-no-repeat min-h-[780px] bg-contain mb-20" style="background-image: url('/image/mitrabg.png');">        
      </div>
      <div class="mx-48">
        <h2 data-aos="fade-up" data-aos-duration="1000" class="font-extrabold text-3xl leading-[1.1] sm:text-3xl md:text-5xl mb-20 text-heading text-center">Mengapa Bergabung dengan kami?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div class="bg-pink p-6 rounded-3xl shadow-md flex items-center" data-aos="zoom-in" data-aos-duration="1500">
            <div class="bg-white p-4 rounded-2xl mr-4">
              <img class="text-4xl object-cover" src="{{ asset('vector/Price.png') }}">
            </div>
            <div class="text-left">
              <h2 class="text-xl font-semibold text-white mb-2">Harga kompetitif</h2>
              <p class="text-white">Dapatkan informasi harga ayam potong dari berbagai penjual secara real-time.</p>
            </div>
          </div>
          <div class="bg-pink p-6 rounded-3xl shadow-md flex items-center" data-aos="zoom-in" data-aos-duration="1500">
            <div class="bg-white p-4 rounded-2xl mr-4">
              <img class="text-4xl object-cover" src="{{ asset('vector/Price.png') }}">
            </div>
            <div class="text-left">
              <h2 class="text-xl font-semibold text-white mb-2">Harga kompetitif</h2>
              <p class="text-white">Dapatkan informasi harga ayam potong dari berbagai penjual secara real-time.</p>
            </div>
          </div>
          <div class="bg-pink p-6 rounded-3xl shadow-md flex items-center" data-aos="zoom-in" data-aos-duration="1500">
            <div class="bg-white p-4 rounded-2xl mr-4">
              <img class="text-4xl object-cover" src="{{ asset('vector/Price.png') }}">
            </div>
            <div class="text-left">
              <h2 class="text-xl font-semibold text-white mb-2">Harga kompetitif</h2>
              <p class="text-white">Dapatkan informasi harga ayam potong dari berbagai penjual secara real-time.</p>
            </div>
          </div>
          <div class="bg-pink p-6 rounded-3xl shadow-md flex items-center" data-aos="zoom-in" data-aos-duration="1500">
            <div class="bg-white p-4 rounded-2xl mr-4">
              <img class="text-4xl object-cover" src="{{ asset('vector/Price.png') }}">
            </div>
            <div class="text-left">
              <h2 class="text-xl font-semibold text-white mb-2">Harga kompetitif</h2>
              <p class="text-white">Dapatkan informasi harga ayam potong dari berbagai penjual secara real-time.</p>
            </div>
          </div>
        </div>
        <x-about></x-about>
        <h2 data-aos="fade-up" data-aos-duration="1000" class="font-extrabold text-3xl leading-[1.1] sm:text-3xl md:text-5xl my-20 text-heading text-center">Cara Kerja</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div data-aos="zoom-in" data-aos-duration="3000" class="bg-pink text-white rounded-3xl p-6 flex flex-col items-center h-[415px]">
             <img alt="Person with magnifying glass searching on a computer screen" class="p-4 mt-16 w-full h-auto object-contain" height="150" src="{{ asset('image/guidemitra1.png') }}" width="150"/>
             <div class="mt-auto flex items-center justify-center bg-white text-pink rounded-full px-4 py-2 font-bold w-52">
                <div class="flex items-center justify-center bg-pink text-white rounded-full w-8 h-8 mr-2">
                   <span class="font-bold">1</span>
                </div>
                Daftar
             </div>
          </div>
          <div data-aos="zoom-in" data-aos-duration="3000" class="bg-pink text-white rounded-3xl p-6 flex flex-col items-center">
             <img alt="Person selecting items on a computer screen" class="p-4 mt-16 w-full h-auto object-contain" height="150" src="{{ asset('image/guidemitra2.png') }}" width="150"/>
             <div class="mt-auto flex items-center justify-center bg-white text-pink rounded-full px-4 py-2 font-bold w-52">
                <div class="flex items-center justify-center bg-pink text-white rounded-full w-8 h-8 mr-2">
                   <span class="font-bold">2</span>
                </div>
                Unggah Produk
             </div>
          </div>
          <div data-aos="zoom-in" data-aos-duration="3000" class="bg-pink text-white rounded-3xl p-6 flex flex-col items-center">
             <img alt="Person holding a credit card with check marks" class="p-4 mt-20 w-full h-auto object-contain" src="{{ asset('image/guidemitra3.png') }}" width="150"/>
             <div class="mt-auto flex items-center justify-center bg-white text-pink rounded-full px-4 py-2 font-bold w-52">
                <div class="flex items-center justify-center bg-pink text-white rounded-full w-8 h-8 mr-2">
                   <span class="font-bold">3</span>
                </div>
                Mulai Jualan
             </div>
          </div>
        </div>
        <h2 data-aos="fade-up" data-aos-duration="1000" class="font-extrabold text-3xl leading-[1.1] sm:text-3xl md:text-5xl my-20 text-heading text-center">Daftar Mitra Toko</h2>
        <x-brand></x-brand>
        <x-mitracta></x-mitracta>
        <h2 data-aos="fade-up" data-aos-duration="1000" class="font-extrabold text-3xl leading-[1.1] sm:text-3xl md:text-5xl my-20 text-heading text-center">Daftar Mitra Toko</h2>
        <x-testimonials></x-testimonials>
      </div>
    </main>
    <footer class="mt-14">
      <x-footer></x-footer>
    </footer>
  </div>
</x-layouts.app>
