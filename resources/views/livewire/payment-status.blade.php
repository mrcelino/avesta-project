<div>
    <!-- Tombol untuk membuka popup -->
    <button wire:click="openPopup" class="btn border-2 border-pink bg-white hover:bg-pink hover:text-white w-1/2 custom text-pink font-semibold py-2 px-4 rounded-2xl">
        Cek Status Pembayaran
    </button>

    <!-- Popup -->
    @if ($showPopup)
        <div class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <p class="text-lg font-semibold">Status Pembayaran</p>
                <p>Informasi status pembayaran akan ditampilkan di sini.</p>
                <button wire:click="closePopup" class="mt-4 bg-pink-500 text-white py-2 px-4 rounded-lg hover:bg-pink-600">Tutup</button>
            </div>
        </div>
    @endif
</div>
