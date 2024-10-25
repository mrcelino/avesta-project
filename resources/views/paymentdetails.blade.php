<x-layouts.app>
    <div>
        <nav class="relative">
            <div class="navbar fixed mx-auto bg-pink shadow-md z-50">
                <div class="navbar-start">
                    <img class="navbar-item h-12 m-2 ml-4" src="{{ asset('image/avesta2.png') }}">
                </div>
            </div>
        </nav>
        <section class="items-center text-center pt-32">
            <h2 class="text-2xl font-semibold mb-2">Selesaikan pembayaran dalam</h2>
            <p class="text-pink text-2xl font-medium mb-2">59:59</p>
            <h2 class="text-xl font-medium mb-2">Batas Waktu Pembayaran</h2>
            <h2 class="text-xl font-semibold mb-2">Jumat, 27 September 2024 15.31</h2>
        </section>
        <section class="bg-white p-4 max-w-2xl mx-auto rounded-xl shadow-md border">
            <h2 class="font-medium">Mandiri Virtual Account</h2>
            <div class="max-w-2xl shadow-md border border-gray-200 rounded-xl p-4 mt-5">
                <h3 class="font-medium mb-2">
                    Nomor Virtual Account
                </h3>
                <p class="font-semibold">
                        8898762134972423
                </p>
            </div>
            <div class="max-w-2xl shadow-md border border-gray-200 rounded-xl p-4 mt-5">
                <h3 class="font-medium mb-2">
                    Total Belanja
                </h3>
                <p class="font-semibold">
                    Rp.200.000
                </p>
            </div>
        </section>
        <section class="flex w-full max-w-2xl mx-auto rounded-xl mt-4 gap-2 mb-8">
            <button class=" btn border-2 border-pink bg-white hover:bg-pink hover:text-white w-1/2 custom  text-pink font-semibold py-2 px-4 rounded-2xl">
                Cek Status Pembayaran
            </button>
            <button class=" btn w-1/2 bg-pink text-white  hover:bg-pink hover:text-white font-semibold py-2 px-4 rounded-2xl">
                Belanja Lagi
            </button>
        </section>
        <section class="max-w-2xl mx-auto">
            <h2 class="text-2xl font-semibold text-center">Cara Pembayaran</h2>
            <x-collapse class="mb-4">
                <x-slot:heading>
                    <h2 class="text-base">ATM Mandiri</h2>
                </x-slot:heading>
                <x-slot:content>
                    <div>
                        1. Masukkan kartu ATM anda dan masukkan PIN anda<br>
                        2. Pilih BAYAR/BELI > MULTI PAYMENT<br>
                        3. MASUKKAN kode perusahaan Avesta: 12345<br>
                        4. Masukkan Nomor Akun Virtual: 88998762134972432<br>
                        5. Masukkan Total Belanja<br>
                        6. Untuk konfirmasi: Pilih 1 lalu OK<br>
                        7. Transaksi selesai
                    </div>
                </x-slot:content>
            </x-collapse>
            <x-collapse class="mb-4">
                <x-slot:heading>
                    <h2 class="text-base">Livin Mandiri</h2>
                </x-slot:heading>
                <x-slot:content>
                     1. Masukkan kartu ATM anda dan masukkan PIN anda<br>
                    2. Pilih BAYAR/BELI > MULTI PAYMENT<br>
                    3. MASUKKAN kode perusahaan Avesta: 12345<br>
                    4. Masukkan Nomor Akun Virtual: 88998762134972432<br>
                    5. Masukkan Total Belanja<br>
                    6. Untuk konfirmasi: Pilih 1 lalu OK<br>
                    7. Transaksi selesai
                </x-slot:content>
            </x-collapse>
            <x-collapse class="mb-4">
                <x-slot:heading>
                    <h2 class="text-base">Internet Banking</h2>
                </x-slot:heading>
                <x-slot:content>
                     1. Masukkan kartu ATM anda dan masukkan PIN anda<br>
                    2. Pilih BAYAR/BELI > MULTI PAYMENT<br>
                    3. MASUKKAN kode perusahaan Avesta: 12345<br>
                    4. Masukkan Nomor Akun Virtual: 88998762134972432<br>
                    5. Masukkan Total Belanja<br>
                    6. Untuk konfirmasi: Pilih 1 lalu OK<br>
                    7. Transaksi selesai
                </x-slot:content>
            </x-collapse>
            <x-collapse class="mb-4">
                <x-slot:heading>
                    <h2 class="text-base">Teller Mandiri</h2>
                </x-slot:heading>
                <x-slot:content>
                     1. Masukkan kartu ATM anda dan masukkan PIN anda<br>
                    2. Pilih BAYAR/BELI > MULTI PAYMENT<br>
                    3. MASUKKAN kode perusahaan Avesta: 12345<br>
                    4. Masukkan Nomor Akun Virtual: 88998762134972432<br>
                    5. Masukkan Total Belanja<br>
                    6. Untuk konfirmasi: Pilih 1 lalu OK<br>
                    7. Transaksi selesai
                </x-slot:content>
            </x-collapse>
        </section>
        
    </div>
</x-layouts.app>