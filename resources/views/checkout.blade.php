<x-layouts.app>
    <div>
        <x-navbaruser></x-navbaruser>
        <main class="p-8 pt-28 flex space-x-8">
            <!-- Bagian Keranjang -->
            <div class="w-2/3">
                <h2 class="text-2xl font-bold mb-4">Keranjang</h2>
                <div class="bg-white p-4 rounded-2xl shadow-md border">
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
                                    <button class="text-white">
                                        <i class="fas fa-minus-circle text-pink border-white"></i>
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
                                    <button class="text-pink">
                                        <i class="fas fa-minus-circle text-pink"></i>
                                    </button>
                                    <span>1</span>
                                    <button class="text-pink">
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
                <div class="bg-white p-4 rounded-2xl border shadow mt-12">
                    <h3 class="text-xl font-bold mb-4">Ringkasan Belanja</h3>
                    <div class="flex justify-between mb-4">
                        <span>Total Belanja</span>
                        <span class="font-bold">Rp.120.000</span>
                    </div>
                    <button wire:navigate href="payment" class="bg-pink text-white w-full py-2 rounded-lg">Konfirmasi</button>
                </div>
            </div>
        </main>
        
    </div>
</x-layouts.app>