<x-layouts.app>
    <div>
        <nav class="relative">
            <div class="navbar fixed mx-auto bg-pink shadow-md z-50">
                <div class="navbar-start">
                    <img class="navbar-item h-12 m-2 ml-4" src="{{ asset('image/avesta2.png') }}">
                </div>
            </div>
            @livewireStyles()
        </nav>
        <main class="p-8 pt-28 flex space-x-8">
            <!-- Bagian Keranjang -->
            <div class="w-2/3">
                <h2 class="text-2xl font-bold mb-4">Pembayaran</h2>
                <div class="bg-white p-4 rounded-xl shadow-md border">
                    <h2 class="font-medium">ALAMAT PENGAMBILAN</h2>
                    <div class="flex items-center shadow-md border border-gray-200 rounded-xl p-4 mt-5">
                        <img class="w-16 h-16 rounded-lg mr-4" height="60" src="https://storage.googleapis.com/a1aa/image/Zv07qlreBnXQFCEuCQJhhDakgBgrzgzCSfcCa9Z8S0azKppTA.jpg" width="60"/>
                        <div>
                            <h3 class="text-lg font-semibold mb-2">
                            Best Meat, Pogung
                                </h3>
                            <p class="font-medium">
                            Jl. Pandega Marta Jl. Pogung Lor No.107, Pogung Kidul, Sinduadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55284
                            </p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-xl shadow-md border mt-4">
                    <!-- Pilih Semua -->                    
                    <!-- Daftar Produk -->
                    <div class="space-y-4">
                        <!-- Item 1 -->
                        <div class="flex items-center justify-between p-4 border rounded-lg">
                            <img src="{{ asset('image/chicken.png') }}" alt="Ayam Utuh Siap Masak 900gr" class="h-20 w-20 rounded-lg" />
                            <div class="flex-1 ml-4">
                                <h3 class="font-bold">Ayam Utuh Siap Masak 900gr</h3>
                                <p>Best Meat, Pagung</p>
                                <div class="flex items-center mt-2 border rounded-xl font-medium w-full max-w-72 p-1">
                                    <img src="{{ asset('image/note.png') }}" alt="Note Icon" class="mr-2"/>
                                    <p>Dibagi menjadi 8 Potong</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="font-bold">2 x Rp.40.000</p>
                            </div>
                        </div>
                        
                        <!-- Item 2 -->
                        <div class="flex items-center justify-between p-4 border rounded-lg">
                            <img src="{{ asset('image/chicken.png') }}" alt="Ayam Utuh Siap Masak 900gr" class="h-20 w-20 rounded-lg" />
                            <div class="flex-1 ml-4">
                                <h3 class="font-bold">Ayam Utuh Siap Masak 900gr</h3>
                                <p>Best Meat, Pagung</p>
                            </div>
                            <div class="text-right">
                                <p class="font-bold">1 x Rp.40.000</p>
                            </div>
                        </div>
                        
                        <!-- Item 3 -->
                        <div class="flex items-center justify-between p-4 border rounded-lg">
                            <img src="{{ asset('image/chicken.png') }}" alt="Ayam Utuh Siap Masak 900gr" class="h-20 w-20 rounded-lg" />
                            <div class="flex-1 ml-4">
                                <h3 class="font-bold">Ayam Utuh Siap Masak 900gr</h3>
                                <p>Best Meat, Pagung</p>
                            </div>
                            <div class="text-right">
                                <p class="font-bold">2 x Rp.40.000</p>
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
                    @livewire('payment-method')
                </div>
            </div>
        </main>
        
    </div>
</x-layouts.app>