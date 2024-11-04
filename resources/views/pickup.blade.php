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
            <h2 class="text-2xl font-semibold mb-2">Ambil Pemesanan dalam</h2>
            <livewire:countdown-/>
            <h2 class="text-xl font-medium mb-2">Batas Waktu Pengambilan</h2>
            <h2 class="text-xl font-semibold mb-2">Jumat, 27 September 2024 15.31</h2>
        </section>
        <section class="bg-white p-4 max-w-2xl mx-auto rounded-xl shadow-md border mt-8 ">
            <h2 class="font-medium text-center text-xl mb-2">Alamat Pengambilan</h2>
            <img class="mx-auto rounded-2xl" src="{{ asset('image/pogungstore.png') }}"/>
            <div class="max-w-2xl shadow-md border border-gray-200 rounded-xl p-4 mt-5">
                <h3 class="font-medium mb-2">
                    Best Meat Pogung
                </h3>
                <p class="font-semibold">
                    Jl. Pandega Marta Jl. Pogung Lor No.107, Pogung Kidul, Sinduadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55284
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
        <footer>
            <x-footer></x-footer>
        </footer>
    </div>
</x-layouts.app>