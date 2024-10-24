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
                          <p class="font-semibold text-lg text-white">Sintya Marisca</p>
                          <p class="text-base text-white">sintyamarrisca@gmail.com</p>
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
                    <x-menu-item class="hover:bg-pink hover:text-white  active:bg-heading" title="Logout" />
                </x-dropdown>
                </div>
            </div>
        </nav>
        <main class="p-8 pt-28 flex space-x-8">
            <!-- Bagian Keranjang -->
            <div class="w-2/3">
                <h2 class="text-2xl font-bold mb-4">Keranjang</h2>
                <div class="bg-white p-4 rounded-xl shadow-md border">
                    <!-- Pilih Semua -->
                    <div class="flex items-center justify-between mb-4">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" />
                            <span>Pilih Semua</span>
                        </label>
                    </div>
                    
                    <!-- Daftar Produk -->
                    <div class="space-y-4">
                        <!-- Item 1 -->
                        <div class="flex items-center justify-between p-4 border rounded-lg">
                            <img src="{{ asset('image/chicken.png') }}" alt="Ayam Utuh Siap Masak 900gr" class="h-20 w-20 rounded-lg" />
                            <div class="flex-1 ml-4">
                                <h3 class="font-bold">Ayam Utuh Siap Masak 900gr</h3>
                                <p>Best Meat, Pagung</p>
                                <div class="flex items-center mt-4">
                                    <img src="{{ asset('image/note.png') }}" alt="Note Icon" class="mr-2"/>
                                    <button>Tambah Catatan</button>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="font-bold">Rp.40.000</p>
                                <div class="flex items-center space-x-2 mt-2">
                                    <button class="text-pink-500">
                                        <i class="fas fa-minus-circle text-pink"></i>
                                    </button>
                                    <span>1</span>
                                    <button class="text-pink-500">
                                        <i class="fas fa-plus-circle text-pink"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Item 2 -->
                        <div class="flex items-center justify-between p-4 border rounded-lg">
                            <img src="{{ asset('image/chicken.png') }}" alt="Ayam Utuh Siap Masak 900gr" class="h-20 w-20 rounded-lg" />
                            <div class="flex-1 ml-4">
                                <h3 class="font-bold">Ayam Utuh Siap Masak 900gr</h3>
                                <p>Best Meat, Pagung</p>
                                <div class="flex items-center mt-4">
                                    <img src="{{ asset('image/note.png') }}" alt="Note Icon" class="mr-2"/>
                                    <button>Tambah Catatan</button>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="font-bold">Rp.40.000</p>
                                <div class="flex items-center space-x-2 mt-2">
                                    <button class="text-pink-500">
                                        <i class="fas fa-minus-circle text-pink"></i>
                                    </button>
                                    <span>1</span>
                                    <button class="text-pink-500">
                                        <i class="fas fa-plus-circle text-pink"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Item 3 -->
                        <div class="flex items-center justify-between p-4 border rounded-lg">
                            <img src="{{ asset('image/chicken.png') }}" alt="Ayam Utuh Siap Masak 900gr" class="h-20 w-20 rounded-lg" />
                            <div class="flex-1 ml-4">
                                <h3 class="font-bold">Ayam Utuh Siap Masak 900gr</h3>
                                <p>Best Meat, Pagung</p>
                                <div class="flex items-center mt-4">
                                    <img src="{{ asset('image/note.png') }}" alt="Note Icon" class="mr-2"/>
                                    <button>Tambah Catatan</button>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="font-bold">Rp.40.000</p>
                                <div class="flex items-center space-x-2 mt-2">
                                    <button class="text-pink-500">
                                        <i class="fas fa-minus-circle text-pink"></i>
                                    </button>
                                    <span>1</span>
                                    <button class="text-pink-500">
                                        <i class="fas fa-plus-circle text-pink"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Ringkasan Belanja -->
            <div class="w-1/3">
                <div class="bg-white p-4 rounded-lg shadow mt-12">
                    <h3 class="text-xl font-bold mb-4">Ringkasan Belanja</h3>
                    <div class="flex justify-between mb-4">
                        <span>Total Belanja</span>
                        <span class="font-bold">Rp.120.000</span>
                    </div>
                    <button class="bg-pink text-white w-full py-2 rounded-lg">Konfirmasi</button>
                </div>
            </div>
        </main>
        
    </div>
</x-layouts.app>