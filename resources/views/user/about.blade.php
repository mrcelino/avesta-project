<x-layouts.app>
    @section('title', 'Avesta')
    <div>
        <header>
            <x-navmenu>
                <x-navlink href="{{ route('home') }}" useWireNavigate="true" class="hover:text-heading nav-link pb-1">Home</x-navlink>
                <x-navlink href="{{ route('product') }}" :useWireNavigate="true" class=" hover:text-heading nav-link pb-1">Produk</x-navlink>
                <x-navlink href="{{ route('about') }}" :useWireNavigate="true" class=" text-heading border-b-4 border-pink  pb-1">Tentang</x-navlink>
                <x-navlink href="{{ route('contact') }}" :useWireNavigate="true" class=" hover:text-heading nav-link pb-1">Hubungi</x-navlink>
                <div class="cursor-pointer border rounded-3xl p-2 border-heading hover:bg-heading group mr-2">
                    <x-navlink href="{{ route('login') }}" :useWireNavigate="true" class="text-heading group-hover:text-white hover:text-white">Login</x-navlink>
                </div>
                <div class="cursor-pointer rounded-3xl p-2 bg-heading text-white hover:bg-white group hover:border hover:border-heading">
                    <x-navlink href="{{ route('register') }}" :useWireNavigate="true" class="text-white group-hover:text-heading">Register</x-navlink>
                </div>
              </x-navmenu>  
        </header>
        <main>
            <x-about></x-about>
        </main>
        <footer>
            <x-footer></x-footer>
        </footer>
</x-layouts.app>