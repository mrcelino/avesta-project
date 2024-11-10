@props(['product'=>new \App\Models\Unggas()])
<div class="bg-white rounded-2xl shadow-md border  p-4">
    <img alt="Image of raw chicken pieces on a wooden plate with some vegetables in the background" class="rounded-t-lg w-full" height="400" src="{{ asset('image/chicken.png') }}" width="600"/>
    <div class="p-4">
        <h2 class="text-lg font-medium">
        {{ $product->jenis_unggas }}
        </h2>
        <p class="text-xl font-bold">
        Rp.{{ number_format($product->harga_per_kg, 0, ',', '.') }}
        </p>
        <p>
        {{ $product->deskripsi }}
        
        </p>

        <div class="flex items-center text-sm mt-2">
            <i class="fas fa-map-marker-alt text-red-500 mr-1"></i>
            <span class="font-medium">0.28 km</span>
            <span class="mx-1">•</span>
            <span class="text-black font-medium">24 Terjual</span>
        </div>

        <div class="flex items-center justify-between mt-4">
            <button 
                class="bg-pink w-full text-white px-4 py-2 rounded-2xl font-bold hover:bg-pink" 
                onclick="document.getElementById('my_modal_3').showModal()"
            >
                Pesan
            </button>
        </div>
    </div>
</div>

<!-- Modal Dialog -->
<dialog id="my_modal_3" class="modal">
    <div class="modal-box max-w-3xl p-6"> <!-- Menambahkan padding -->
        <form method="dialog">
            <button 
                class="btn btn-sm btn-circle text-xl btn-ghost absolute text-pink right-2 top-2">
                ✕
            </button>
        </form>
        <h3 class="text-lg font-bold mb-2">Detail Produk</h3>
        <div class="flex border-2 border-slate-200 rounded-2xl p-4">
            <!-- Kolom Kiri: Gambar -->
            <div class="w-1/2">
                <img alt="A plate of raw chicken pieces with some vegetables in the background" class="w-full h-full rounded-lg object-cover" src="{{ asset('image/chicken.png') }}"/>
            </div>
            
            <!-- Kolom Kanan: Deskripsi dan Aksi -->
            <div class="ml-4 w-1/2 flex flex-col justify-between">
                <div>
                    <h2 class="text-lg font-semibold mb-2">
                        Ayam Utuh Siap Masak 900gr
                    </h2>
                    <p class="font-normal">
                        Ayam negeri utuh siap dimasak dengan berat 900gr
                    </p>
                    <p class="text-xl font-semibold mt-2 mb-2">
                        Rp.40.000
                    </p>
                    <p>
                        Best Meat, Pogung
                    </p>
                    <div class="flex items-center mt-1">
                        <i class="fas fa-map-marker-alt text-pink mr-1"></i>
                        <span class="font-semibold">0.28 km • 24 Terjual</span>
                    </div>
                    <p class="mt-1">Stok: 40</p>
                </div>
                
                <!-- Aksi -->
                @livewire('product-counter')
                <button class="bg-pink text-white w-full py-2 font-semibold rounded-2xl mt-4">Tambah ke keranjang</button>
            </div>
        </div>
    </div>
</dialog>
