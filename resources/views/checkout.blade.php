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
                    @foreach ($keranjangItems as $item)
                    <div class="flex items-center justify-between p-4 border rounded-lg">
                        <img src="{{ asset('image/chicken.png') }}" alt="{{ $item->unggas->jenis_unggas }}" class="h-20 w-20 rounded-lg" />
                        <div class="flex-1 ml-4">
                            <h3 class="font-bold">{{ $item->unggas->jenis_unggas }}</h3>
                            <p>{{ $item->unggas->warung->nama_warung }}</p>
                            <div class="flex items-center mt-4">
                                <img src="{{ asset('image/note.png') }}" alt="Note Icon" class="mr-2" />
                                <button onclick="document.getElementById('modal_{{ $item->id_keranjang }}').showModal()">
                                    {{ \Illuminate\Support\Str::limit(isset($catatan[$item->id_keranjang]) && $catatan[$item->id_keranjang] !== '' ? $catatan[$item->id_keranjang] : 'Tambah Catatan', 100) }}
                                </button>
                                
                                <dialog id="modal_{{ $item->id_keranjang }}" class="modal">
                                    <div class="modal-box max-w-sm">
                                        <textarea 
                                            class="p-2 w-full min-h-14 border-2 rounded-2xl" 
                                            placeholder="Tambah Catatan" 
                                            wire:model.defer="catatan.{{ $item->id_keranjang }}"
                                        ></textarea>
                                        <div class="modal-action">
                                            <form method="dialog">
                                                <!-- Tombol Batal untuk menutup modal -->
                                                <button 
                                                    onclick="document.getElementById('modal_{{ $item->id_keranjang }}').close()" 
                                                    class="btn hover:bg-white bg-white border-2 border-gray-200 text-black rounded-2xl"
                                                >
                                                    Batal
                                                </button>
                                                <!-- Tombol Tambah untuk memperbarui keranjang -->
                                                <button 
                                                    wire:click="updateKeranjang({{ $item->id_keranjang }})" 
                                                    class="btn hover:bg-pink bg-pink text-white rounded-2xl"
                                                >
                                                    Tambah
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </dialog>
                            </div>                            
                        </div>
                        <div class="text-right">
                            <p class="font-bold">Rp.{{ number_format($item->unggas->harga_per_kg, 0, ',', '.') }}</p>
                            <div class="flex items-center space-x-2 mt-2">
                                <button wire:click="decreaseQuantity({{ $item->id_keranjang }})" class="text-white">
                                    <i class="fas fa-minus-circle text-pink border-white"></i>
                                </button>
                                <span>{{ $jumlah[$item->id_keranjang] }}</span>
                                <button wire:click="increaseQuantity({{ $item->id_keranjang }})" class="text-pink-500">
                                    <i class="fas fa-plus-circle text-pink"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Ringkasan Belanja -->
        <div class="w-1/3">
            <div class="bg-white p-4 rounded-2xl border shadow mt-12">
                <h3 class="text-xl font-bold mb-4">Ringkasan Belanja</h3>
                <div class="flex justify-between mb-4">
                    <span>Total Belanja</span>
                    <span class="font-bold">Rp.{{ number_format($totalBelanja, 0, ',', '.') }}</span>
                </div>
                <button wire:click="konfirmasiBelanja" class="bg-pink text-white w-full py-2 rounded-lg">Konfirmasi</button>
            </div>
        </div>
    </main>
    <dialog id="my_modal_4" class="modal">
        <div class="modal-box max-w-sm">
          <input class="p-2 w-full min-h-14 border-2 rounded-2xl" placeholder="Tambah Catatan"></input>
          <div class="modal-action">
            <form method="dialog">
              <!-- if there is a button, it will close the modal -->
              <button class="btn hover:bg-white bg-white border-2 border-gray-200 text-black rounded-2xl">Batal</button>
              <button class="btn hover:bg-pink bg-pink text-white rounded-2xl">Tambah</button>
            </form>
          </div>
        </div>
      </dialog>
</div>

