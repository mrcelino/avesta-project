<x-layouts.app>
    <div>
        <nav class="relative">
            <div class="navbar fixed mx-auto rounded-lg bg-white shadow-md z-50">
                <div class="navbar-start">
                    <img class="navbar-item h-12 m-2 ml-4" src="{{ asset('image/avesta.png') }}">
                    <div class="rounded-3xl p-1 mx-4 mt-2 bg-heading text-white group hover:bg-white group hover:border hover:border-heading">
                      <x-navlink href="#" wire:navigate class="text-white group-hover:text-heading">Mitra</x-navlink>
                    </div>
                </div>
                <div class="navbar-center ">
                    <a href="#meat" class="font-bold text-lg mx-5 text-heading">Cari Daging</a>
                    <a href="#order" class="font-bold text-lg mx-5 text-heading">Cara Order</a>
                </div>
                <div class="navbar-end">
                  <x-navlink href="#">
                      <div class="flex items-center bg-pink text-white rounded-full px-4 py-2">
                        <img src="{{ asset('image/pin.png') }}" alt="Location Icon" class="h-6 w-6 mr-2"/>
                        <span class="text-lg font-md">Pogung Baru</span>
                          {{-- <i class="ml-2 text-xl"></i> --}}
                      </div>
                  </x-navlink>
                  <x-dropdown>
                      {{-- <div class="bg-pink rounded-xl mt-2 mb-2 p-2">
                          <p class="font-semibold text-lg text-white">{{ $user->nama_depan }} {{ $user->nama_belakang }}</p>
                          <p class="text-base text-white">{{ $user->email }}</p>
                      </div> --}}
                      <x-slot:trigger>
                        <x-button class="ml-4 btn-circle bg-pink stroke-none hover:bg-pink">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 text-white">
                                <path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                            </svg>                        
                        </x-button>
                      </x-slot:trigger>
                      <x-menu-item class="hover:bg-pink hover:text-white active:bg-heading" title="Riwayat Pembelian" />
                      <x-menu-item class="hover:bg-pink hover:text-white  active:bg-heading" title="Pengaturan" />
                      <x-menu-item class="hover:bg-pink hover:text-white  active:bg-heading" title="Logout" />
                  </x-dropdown>
                  <x-dropdown>
                    <div class="bg-pink rounded-xl mt-2 mb-2 p-2">
                        <p class="font-semibold text-lg text-white">Sintya Marisca</p>
                        <p class="text-base text-white">sintyamarrisca@gmail.com</p>
                    </div>
                    <x-slot:trigger>
                      <x-button class="ml-5 btn-circle btn-outline hover:bg-pink stroke-none border-2 border-heading hover:border-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FB657A" class="size-6 hover:fill-white">
                            <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                          </svg>                     
                      </x-button>
                    </x-slot:trigger>
                    <x-menu-item class="hover:bg-pink hover:text-white active:bg-heading" title="Riwayat Pembelian" />
                    <x-menu-item class="hover:bg-pink hover:text-white  active:bg-heading" title="Logout"/>
                </x-dropdown>
                </div>
            </div>
        </nav>
        <main >
            <x-hero></x-hero>
            <div id="meat"></div>
            <div class="mx-20">
                <h2 class="font-extrabold text-3xl leading-[1.1] sm:text-3xl md:text-6xl my-20 mb-8 text-heading text-center">Yuk Cari Ayam Pilihanmu!</h2>
                <div class="flex items-center justify-center mb-8">
                    <div  class="bg-white rounded-3xl border-2 shadow-xl p-8 w-full max-w-md">
                        <h1 class="text-center text-pink-500 text-2xl font-bold mb-6">Cari Daging Sekarang</h1>
                        <div class="flex items-center space-x-2">
                            <input type="text" placeholder="Daging ayam" class="bg-gray-100 rounded-full px-4 py-2 text-gray-400 focus:outline-none flex-grow shadow-inner">
                            <button class="bg-pink text-white rounded-full px-6 py-2 shadow-lg">Cari</button>
                        </div>
                    </div>
                </div>
                <div  class="grid grid-cols-6 gap-4">
                    <div class="flex flex-col items-center bg-white rounded-2xl border-2 shadow-md p-4 transition duration-300 hover:scale-110">
                        <img src="{{ asset('image/ayam1.png') }}" alt="Whole chicken" class="w-24 h-24 mb-2">
                        <p class="text-heading font-bold text-lg">Ayam Utuh</p>
                    </div>
                    <div class="flex flex-col items-center bg-white rounded-2xl border-2 shadow-md p-4 transition duration-300 hover:scale-110">
                        <img src="{{ asset('image/ayam2.png') }}" alt="Chicken breast" class="w-24 h-24 mb-2">
                        <p class="text-heading font-bold text-lg">Dada Ayam</p>
                    </div>
                    <div class="flex flex-col items-center bg-white rounded-2xl border-2 shadow-md p-4 transition duration-300 hover:scale-110">
                        <img src="{{ asset('image/ayam3.png') }}" alt="Chicken feet" class="w-24 h-24 mb-2">
                        <p class="text-heading font-bold text-lg">Ceker Ayam</p>
                    </div>
                    <div class="flex flex-col items-center bg-white rounded-2xl border-2 shadow-md p-4 transition duration-300 hover:scale-110">
                        <img src="{{ asset('image/ayam4.png') }}" alt="Chicken wings" class="w-24 h-24 mb-2">
                        <p class="text-heading font-bold text-lg">Sayap Ayam</p>
                    </div>
                    <div class="flex flex-col items-center bg-white rounded-2xl border-2 shadow-md p-4 transition duration-300 hover:scale-110">
                        <img src="{{ asset('image/ayam5.png') }}" alt="Chicken fillet" class="w-24 h-24 mb-2">
                        <p class="text-heading font-bold text-lg">Ayam Fillet</p>
                    </div>
                    <div class="flex flex-col items-center bg-white rounded-2xl border-2 shadow-md p-4 transition duration-300 hover:scale-110">
                        <img src="{{ asset('image/ayam6.png') }}" alt="Chicken offal" class="w-24 h-24 mb-2">
                        <p class="text-heading font-bold text-lg">Jeroan</p>
                    </div>
                </div>
                <div id="order"></div>
                <h2 class="font-extrabold text-3xl leading-[1.1] sm:text-3xl md:text-6xl my-20 text-heading text-center">Bagaimana Cara Pesan</h2>
                <x-orderguide></x-orderguide>
                <h2 class="font-extrabold text-3xl leading-[1.1] sm:text-3xl md:text-6xl my-20 text-heading text-center">Daftar Mitra Toko</h2>
                <x-brand></x-brand>
                <h2 class="font-extrabold text-3xl leading-[1.1] sm:text-3xl md:text-6xl my-20 text-heading text-center">Testimoni</h2>
                <x-testimonials></x-testimonials>
            </div>
        </main>
        <footer class="mt-20">
            <x-footer></x-footer>
        </footer>
    </div>


    
</x-layouts.app>