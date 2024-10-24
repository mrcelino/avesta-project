<x-layouts.app>
    @section('title', 'Avesta')
    <div>
        <header>
            <x-navmenu>
                <x-navlink href="#">Home</x-navlink>
                <x-navlink href="">Produk</x-navlink>
                <x-navlink href="#about">Tentang</x-navlink>
                <x-navlink href="#footer">Hubungi</x-navlink>
                <div class="border rounded-3xl p-2 border-heading hover:bg-heading group mr-2">
                  <x-navlink href="{{ route('login') }}" :useWireNavigate="true" class="text-heading group-hover:text-white ">Login</x-navlink>
                </div>
                <div class="rounded-3xl p-2 bg-heading text-white hover:bg-white group hover:border hover:border-heading">
                  <x-navlink href="{{ route('register') }}" :useWireNavigate="true" class="text-white group-hover:text-heading">Register</x-navlink>
                </div>
              </x-navmenu>
        </header>
        <main class="flex items-center justify-center min-h-screen text-black" style="background-image: url('/image/bghero.png');">
                <div class="bg-white rounded-3xl shadow-lg p-12 mt-20" style="width: 1000px;">
                    <div class="justify-center items-center">
                        <h1 class="text-center text-pink text-3xl font-bold text-pink-600 mb-4">
                            Temukan Ayam Terbaik di Sekitar Anda
                        </h1>
                        <p class="text-center text-pink mb-8 font-medium leading-7">
                            Telusuri berbagai pilihan daging ayam dari mitra terbaik kami di daerah Anda. <br>Dengan harga yang kompetitif dan kualitas terjamin, temukan ayam potong segar <br>setiap hari. Pilih produk yang sesuai kebutuhan Anda, langsung dari toko terdekat.
                        </p>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="flex flex-col items-center bg-white rounded-2xl border-2 shadow-md p-4 transition duration-300 hover:scale-110">
                                <img src="{{ asset('image/ayam1.png') }}" alt="Whole chicken" class="w-24 h-24 mb-2">
                                <p class="text-heading font-bold text-lg">Ayam Utuh</p>
                            </div>
                            <div class="flex flex-col items-center bg-white rounded-2xl border-2 shadow-md p-4 transition duration-300 hover:scale-110">
                                <img src="{{ asset('image/ayam2.png') }}" alt="Chicken breast" class="w-24 h-24 mb-2">
                                <p class="text-heading font-bold text-lg">Dada Ayam</p>
                            </div>
                            <div class="flex flex-col items-center bg-white rounded-2xl border-2 shadow-md p-4 transition duration-300 hover:scale-110">
                                <img src="{{ asset('image/ayam3.png') }}" alt="Chicken feet" class="w-24 h-24 mb-2">
                                <p class="text-heading font-bold text-lg">Ceker Ayam</p>
                            </div>
                            <div class="flex flex-col items-center bg-white rounded-2xl border-2 shadow-md p-4 transition duration-300 hover:scale-110">
                                <img src="{{ asset('image/ayam4.png') }}" alt="Chicken wings" class="w-24 h-24 mb-2">
                                <p class="text-heading font-bold text-lg">Sayap Ayam</p>
                            </div>
                            <div class="flex flex-col items-center bg-white rounded-2xl border-2 shadow-md p-4 transition duration-300 hover:scale-110">
                                <img src="{{ asset('image/ayam5.png') }}" alt="Chicken fillet" class="w-24 h-24 mb-2">
                                <p class="text-heading font-bold text-lg">Ayam Fillet</p>
                            </div>
                            <div class="flex flex-col items-center bg-white rounded-2xl border-2 shadow-md p-4 transition duration-300 hover:scale-110">
                                <img src="{{ asset('image/ayam6.png') }}" alt="Chicken offal" class="w-24 h-24 mb-2">
                                <p class="text-heading font-bold text-lg">Jeroan</p>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
    </div>
</x-layouts.app>