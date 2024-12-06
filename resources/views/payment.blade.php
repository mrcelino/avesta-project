<x-layouts.app>
    <div>
        <x-navbarclean></x-navbarclean>
        <main class="p-8 pt-28 flex space-x-8">
            <!-- Bagian Keranjang -->
            <div class="w-2/3">
                <h2 class="text-2xl font-bold mb-4">Pembayaran</h2>
                @foreach($pesananItems as $item)
                <div class="bg-white p-4 rounded-xl shadow-md border">
                    <h2 class="font-medium">ALAMAT PENGAMBILAN</h2>
                    <div class="flex items-center shadow-md border border-gray-200 rounded-xl p-4 mt-5">
                        <img class="size-20 rounded-lg mr-4" height="60" src="https://storage.googleapis.com/a1aa/image/Zv07qlreBnXQFCEuCQJhhDakgBgrzgzCSfcCa9Z8S0azKppTA.jpg" width="60"/>
                        <div>
                            <h3 class="text-lg font-semibold mb-2">
                                {{ $item['nama_warung'] }}
                                </h3>
                            <p class="font-medium">
                                {{ $item['alamat_warung'] }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="bg-white p-4 rounded-xl shadow-md border mt-4">
                    <!-- Pilih Semua -->                    
                    <!-- Daftar Produk -->
                    <div class="space-y-4">
                        <!-- Item 1 -->
                        @foreach($pesananItems as $item)
                        <div class="flex items-center justify-between p-4 border rounded-lg">
                            <img src="{{ asset('image/chicken.png') }}" alt="Ayam Utuh Siap Masak 900gr" class="size-24 rounded-lg" />
                            <div class="flex-1 ml-4">
                                <h3 class="font-bold">{{ $item['jenis_unggas'] }}</h3>
                                <p>{{ $item['nama_warung'] }}</p>
                                <div class="flex items-center mt-2 border rounded-xl font-medium max-w-56 p-1">
                                    <img src="{{ asset('image/note.png') }}" alt="Note Icon" class="mr-2"/>
                                    <p>{{ $item['catatan'] }}</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="font-bold">{{ $item['jumlah'] }} x Rp.{{ number_format($item['harga_per_kg'], 0, ',', '.') }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        
            <!-- Ringkasan Belanja -->
            <div class="w-1/3">
                <div class="bg-white p-4 rounded-lg shadow mt-12">
                    <h3 class="text-xl font-bold mb-4">Ringkasan Belanja</h3>
                    <div class="flex justify-between mb-4">
                        <span>Total Belanja</span>
                        <span class="font-bold">Rp.{{ number_format($totalBelanja, 0, ',', '.') }}</span>
                    </div>
                    @livewire('payment-method')
                </div>
            </div>
        </main>
        
    </div>
</x-layouts.app>