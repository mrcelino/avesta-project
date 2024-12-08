<x-layouts.app>
    <div>
        <x-navbarclean></x-navbarclean>
        <section class="items-center text-center pt-32">
            <h2 class="text-2xl font-semibold mb-2">Selesaikan pembayaran dalam</h2>
            <livewire:countdown-timer />
            <h2 class="text-xl font-medium mb-2">Batas Waktu Pembayaran</h2>
            <h2 class="text-xl font-semibold mb-2">
                {{ session('paymentDate') }} <!-- Menampilkan tanggal pembayaran -->
            </h2>.
        </section>
        <section class="bg-white p-4 max-w-2xl mx-auto rounded-xl shadow-md border">
            <h2 class="font-medium">
                @if(session('selectedBank'))
                    {{ session('selectedBank') }} Virtual Account
                @else
                    Pilih Metode Pembayaran
                @endif
            </h2>           
            <div class="max-w-2xl shadow-md border border-gray-200 rounded-xl p-4 mt-5">
                <h3 class="font-medium mb-2">
                    Nomor Virtual Account
                </h3>
                <p class="font-semibold">
                    {{ rand(1000000000000000, 9999999999999999) }}
                </p>                
            </div>
            <div class="max-w-2xl shadow-md border border-gray-200 rounded-xl p-4 mt-5">
                <h3 class="font-medium mb-2">
                    Total Belanja 
                </h3>
                <p class="font-semibold">
                    {{ session('totalBelanja') }}
                </p>
            </div>
        </section>
        <section class="flex w-full max-w-2xl mx-auto rounded-xl mt-4 gap-2 mb-8">
            @if ($order)
            <button class="btn border-2 border-pink bg-white hover:bg-pink hover:text-white w-1/2 custom text-pink font-semibold py-2 px-4 rounded-2xl" 
            onclick="document.getElementById('{{ $showModal }}').showModal()">
            Cek Status Pembayaran
            </button>
            <dialog id="my_modal_3" class="modal">
                <div class="modal-box bg-pink">
                  <form method="dialog">
                    <button class="btn btn-sm btn-circle btn-ghost text-white absolute right-2 top-2">✕</button>
                  </form>
                  <h3 class="text-center text-3xl font-bold text-white mb-4">Pembayaran <br>Terkonfirmasi</h3>
                  <img class="px-12 py-8 flex justify-center" src="{{ asset('image/success.png') }}">
                </div>
            </dialog>
            <dialog id="my_modal_31" class="modal">
                <div class="modal-box bg-pink">
                  <form method="dialog">
                    <button class="btn btn-sm btn-circle btn-ghost text-white absolute right-2 top-2">✕</button>
                  </form>
                  <h3 class="text-center text-3xl font-bold text-white mb-4">Pembayaran <br>Tertunda</h3>
                  <img class="px-12 py-8 flex justify-center mx-auto" src="{{ asset('image/gagal.png') }}">
                </div>
            </dialog>
            @endif
            <!-- Script untuk redirect setelah modal ditutup -->
            @if ($showModal == 'my_modal_3')
            <script>
                // Tunggu sampai modal terbuka
                document.addEventListener('DOMContentLoaded', function () {
                    const modal = document.getElementById('my_modal_3');
                    modal.showModal();

                    // Event listener untuk menutup modal
                    modal.addEventListener('close', function () {
                        setTimeout(function () {
                            // Redirect setelah 5 detik
                            window.location.href = '{{ route('pickup') }}?order_id={{ $orderId }}';
                        }, 3000); // Ubah menjadi 5000ms untuk 5 detik
                    });

                    // Tutup modal secara otomatis setelah 5 detik
                    setTimeout(function() {
                        modal.close();
                        @this.redirectToPickup(); // Panggil method Livewire
                    }, 3000); // 5 detik setelah modal terbuka
                });
            </script>
            @endif
            <a wire:navigate href="{{ route('dashboard') }}" class="btn w-1/2 bg-pink text-white hover:bg-pink hover:text-white font-semibold py-2 px-4 rounded-2xl">
                Belanja Lagi
            </a>
        </section>
        <section class="max-w-2xl mx-auto">
            <h2 class="text-2xl font-semibold text-center mb-10">Cara Pembayaran</h2>
            <x-collapse class="mb-4">
                <x-slot:heading>
                    <h2 class="text-base">ATM {{ session('selectedBank') }}</h2>
                </x-slot:heading>
                <x-slot:content>
                    <div>
                        1. Masukkan kartu ATM anda dan masukkan PIN anda<br>
                        2. Pilih BAYAR/BELI > MULTI PAYMENT<br>
                        3. MASUKKAN kode perusahaan Avesta: 12345<br>
                        4. Masukkan Nomor Akun Virtual: {{ rand(1000000000000000, 9999999999999999) }}<br>
                        5. Masukkan Total Belanja<br>
                        6. Untuk konfirmasi: Pilih 1 lalu OK<br>
                        7. Transaksi selesai
                    </div>
                </x-slot:content>
            </x-collapse>
            <x-collapse class="mb-4">
                <x-slot:heading>
                    <h2 class="text-base">Mobile Banking</h2>
                </x-slot:heading>
                <x-slot:content>
                    1. Buka aplikasi Mobile Banking Anda dan login.<br>
                    2. Pilih menu Transfer.<br>
                    3. Pilih opsi Transfer ke Virtual Account.<br>
                    4. Masukkan nomor Virtual Account yang diberikan.<br>
                    5. Masukkan jumlah pembayaran sesuai tagihan.<br>
                    6. Konfirmasi detail pembayaran, lalu selesaikan transaksi.<br>
                    7. Simpan bukti transaksi yang ditampilkan di aplikasi.
                </x-slot:content>
            </x-collapse>
            <x-collapse class="mb-4">
                <x-slot:heading>
                    <h2 class="text-base">Internet Banking</h2>
                </x-slot:heading>
                <x-slot:content>
                    1. Login ke akun Internet Banking Anda melalui browser.<br>
                    2. Pilih menu Transfer atau Bayar Tagihan.<br>
                    3. Pilih Transfer ke Virtual Account.<br>
                    4. Masukkan nomor Virtual Account yang diberikan.<br>
                    5. Masukkan nominal pembayaran sesuai tagihan.<br>
                    6. Periksa dan konfirmasi detail pembayaran.<br>
                    7. Simpan atau cetak bukti transaksi yang muncul.
                </x-slot:content>
            </x-collapse>
            <x-collapse class="mb-4">
                <x-slot:heading>
                    <h2 class="text-base">Teller {{ session('selectedBank') }}</h2>
                </x-slot:heading>
                <x-slot:content>
                    1. Kunjungi cabang bank terdekat.<br>
                    2. Isi formulir setoran/transfer dengan mencantumkan nomor Virtual Account yang diberikan.<br>
                    3. Serahkan formulir kepada teller bersama uang pembayaran.<br>
                    4. Teller akan memproses transaksi.<br>
                    5. Terima bukti pembayaran dari teller sebagai konfirmasi pembayaran.
                </x-slot:content>
            </x-collapse>
        </section>
        @livewireScripts()
    </div>
</x-layouts.app>
