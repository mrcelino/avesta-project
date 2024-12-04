<x-layouts.app>
    @section('title', 'Avesta')
    <div>
        <header>
            <x-navmenu>
                <x-navlink href="{{ route('mitra') }}" useWireNavigate="true" class="hover:text-heading nav-link pb-1">Home</x-navlink>
                <x-navlink href="/admin" :useWireNavigate="true" class=" text-heading border-b-4 border-pink  pb-1">Dashboard</x-navlink>
                <x-navlink href="{{ route('aboutmitra') }}" :useWireNavigate="true" class=" hover:text-heading nav-link pb-1">Tentang</x-navlink>
                <x-navlink href="{{ route('contactmitra') }}" :useWireNavigate="true" class=" hover:text-heading nav-link pb-1">Hubungi</x-navlink>
                @guest
                <div class="cursor-pointer border rounded-3xl p-2 border-heading hover:bg-heading group mr-2">
                    <x-navlink href="{{ route('login') }}" :useWireNavigate="true" class="text-heading group-hover:text-white hover:text-white">Login</x-navlink>
                </div>
                <div class="cursor-pointer rounded-3xl p-2 bg-heading text-white hover:bg-white group hover:border hover:border-heading">
                    <x-navlink href="{{ route('registermitra') }}" :useWireNavigate="true" class="text-white group-hover:text-heading">Register</x-navlink>
                </div>
                @endguest
                @auth
                <x-dropdown>
                    <div class="border-pink border-2 rounded-xl mt-2 mb-2 p-2">
                        <p class="font-semibold text-lg text-pink">{{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }}</p>
                        <p class="text-base text-pink">{{ Auth::user()->email }}</p>
                    </div>
                    <x-slot:trigger>
                      <x-button class="ml-5 btn-circle bg-pink btn-outline group hover:bg-pink stroke-none border-2 border-heading hover:border-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFF" class="size-6 group-hover:fill-white">
                            <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                          </svg>                     
                      </x-button>
                    </x-slot:trigger>
                    <x-menu-item wire:navigate href="{{route('logout')}}" class="hover:bg-pink hover:text-white active:bg-heading" title="Logout" />
                </x-dropdown>
                @endauth
              </x-navmenu>    
        </header>
        <main class="flex items-center justify-center min-h-screen text-black" style="background-image: url('/image/bghero.png');">
                <div class="bg-white mx-auto rounded-3xl shadow-lg p-12 mt-20 max-w-[1000px]">
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