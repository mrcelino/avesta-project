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
                <div class="navbar-end">
                  <x-navlink href="#">
                      <div class="flex items-center bg-pink text-white rounded-full px-4 py-2">
                        <img src="{{ asset('image/pin.png') }}" alt="Location Icon" class="h-6 w-6 mr-2"/>
                        <span class="text-lg font-md">Pogung Baru, Avesta Group</span>
                          {{-- <i class="ml-2 text-xl"></i> --}}
                      </div>
                  </x-navlink>
                  <x-dropdown>
                      <div class="bg-pink rounded-xl mt-2 mb-2 p-2">
                          <p class="font-semibold text-lg text-white">Sintya Marisca</p>
                          <p class="text-base text-white">sintyamarrisca@gmail.com</p>
                      </div>
                      <x-slot:trigger>
                          <x-button icon="o-bell" class="btn-circle btn-outline" />
                      </x-slot:trigger>
                   
                      <x-menu-item title="Riwayat Pembelian" />
                      <x-menu-item title="Logout" />
                  </x-dropdown>
                </div>
            </div>
        </nav>
        <main>
            <x-hero></x-hero>
            <div class="mx-20">
                <h2 class="font-extrabold text-3xl leading-[1.1] sm:text-3xl md:text-6xl my-20 text-heading text-center">Kategori</h2>
                <div class="grid grid-cols-6 gap-4">
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
                <h2 class="font-extrabold text-3xl leading-[1.1] sm:text-3xl md:text-6xl my-20 text-heading text-center">Bagaimana Cara Pesan</h2>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="bg-pink text-white rounded-3xl p-6 flex flex-col items-center h-[415px]">
                       <img alt="Person with magnifying glass searching on a computer screen" class="mt-28" height="150" src="{{ asset('image/order1.png') }}" width="150"/>
                       <div class="mt-auto flex items-center justify-center bg-white text-pink rounded-full px-4 py-2 font-bold w-52">
                          <div class="flex items-center justify-center bg-pink text-white rounded-full w-8 h-8 mr-2">
                             <span class="font-bold">1</span>
                          </div>
                          Cari Toko
                       </div>
                    </div>
                    <div class="bg-pink text-white rounded-3xl p-6 flex flex-col items-center">
                       <img alt="Person selecting items on a computer screen" class="mt-28" height="150" src="{{ asset('image/order2.png') }}" width="150"/>
                       <div class="mt-auto flex items-center justify-center bg-white text-pink rounded-full px-4 py-2 font-bold w-52">
                          <div class="flex items-center justify-center bg-pink text-white rounded-full w-8 h-8 mr-2">
                             <span class="font-bold">2</span>
                          </div>
                          Pilih Pesanan
                       </div>
                    </div>
                    <div class="bg-pink text-white rounded-3xl p-6 flex flex-col items-center">
                       <img alt="Person holding a credit card with check marks" class="mt-32" height="150" src="{{ asset('image/order3.png') }}" width="150"/>
                       <div class="mt-auto flex items-center justify-center bg-white text-pink rounded-full px-4 py-2 font-bold w-52">
                          <div class="flex items-center justify-center bg-pink text-white rounded-full w-8 h-8 mr-2">
                             <span class="font-bold">3</span>
                          </div>
                          Bayar Online
                       </div>
                    </div>
                    <div class="bg-pink text-white rounded-3xl p-6 flex flex-col items-center">
                       <img alt="Person receiving a package" class="mt-28" height="150" src="{{ asset('image/order4.png') }}" width="150"/>
                       <div class="mt-auto flex items-center justify-center bg-white text-pink rounded-full px-4 py-2 font-bold w-52">
                          <div class="flex items-center justify-center bg-pink text-white rounded-full w-8 h-8 mr-2">
                             <span class="font-bold">4</span>
                          </div>
                          Ambil Pesanan
                       </div>
                    </div>
                 </div>
                 
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
