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
        <a href="toko" wire:navigate>
        {{ $product->warung->nama_warung ?? 'Nama warung tidak tersedia' }}
        </a>

        <div class="flex items-center text-sm mt-2">
            <i class="fas fa-map-marker-alt text-red-500 mr-1"></i>
            <span class="font-medium">0.28 km</span>
            <span class="mx-1">•</span>
            <span class="text-black font-medium">{{ $product->penjualan}} Terjual</span>
        </div>

        <div class="flex items-center justify-between mt-4">
            <button 
                class="bg-pink w-full text-white px-4 py-2 rounded-2xl font-bold hover:bg-pink" 
                onclick="openModal('{{ $product->id }}', '{{ $product->jenis_unggas }}', '{{ number_format($product->harga_per_kg, 0, ',', '.') }}', '{{ $product->deskripsi }}', '{{ $product->warung->nama_warung ?? 'Nama warung tidak tersedia' }}', '{{ $product->penjualan }}', '{{ $product->stok }}')"
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
                <img alt="A plate of raw chicken pieces with some vegetables in the background" class="w-full h-full rounded-lg object-cover"/>
            </div>
            
            <!-- Kolom Kanan: Deskripsi dan Aksi -->
            <div class="ml-4 w-1/2 flex flex-col justify-between">
                <div>
                    <h2 class="text-lg font-semibold mb-2"></h2> <!-- Nama produk -->
                    <p class="font-normal deskripsi"></p> <!-- Deskripsi produk -->
                    <p class="text-xl font-semibold mt-2 mb-2 harga"></p> <!-- Harga produk -->
                    <p class="warung"></p> <!-- Nama warung -->
                    <div class="flex items-center mt-1">
                        <i class="fas fa-map-marker-alt text-pink mr-1"></i>
                        <span class="font-semibold">0.28 km <span class="penjualan"></span></span> <!-- Penjualan -->
                    </div>
                    <p class="mt-1 stok"></p>
                </div>
                
                <!-- Aksi -->
                @livewire('product-counter')
                <button wire:click="addToKeranjang({{$product->id_unggas}})" class="bg-pink text-white w-full py-2 font-semibold rounded-2xl mt-4">Tambah ke keranjang</button>
            </div>
        </div>
    </div>
</dialog>


<script>
    function openModal(id, jenis_unggas, harga_per_kg, deskripsi, warung, penjualan, stok) {
    // Update konten di dalam modal
    document.querySelector('#my_modal_3 .modal-box img').src = '/image/chicken.png'; // Gambar dapat disesuaikan
    document.querySelector('#my_modal_3 .modal-box h2').innerText = jenis_unggas;
    document.querySelector('#my_modal_3 .modal-box .harga').innerText = 'Rp.' + harga_per_kg;
    document.querySelector('#my_modal_3 .modal-box .deskripsi').innerText = deskripsi;
    document.querySelector('#my_modal_3 .modal-box .warung').innerText = warung;
    document.querySelector('#my_modal_3 .modal-box .stok').innerText = "Stok: " + stok;
    document.querySelector('#my_modal_3 .modal-box .penjualan').innerText = penjualan + " Terjual";

    // Buka modal
    document.getElementById('my_modal_3').showModal();
}
</script>