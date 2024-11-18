<x-layouts.app>
    @section('title', 'Avesta')
    <header>
      <x-navmenu>
        <x-navlink href="{{ route('home') }}" useWireNavigate="true" class="text-heading pb-1 border-b-4 border-pink">Home</x-navlink>
        <x-navlink href="{{ route('product') }}" :useWireNavigate="true" class=" hover:text-heading group nav-link pb-1">Produk</x-navlink>
        <x-navlink href="{{ route('about') }}" :useWireNavigate="true" class=" hover:text-heading group nav-link pb-1">Tentang</x-navlink>
        <x-navlink href="{{ route('contact') }}" :useWireNavigate="true" class=" hover:text-heading group nav-link pb-1">Hubungi</x-navlink>
        <div class="cursor-pointer border rounded-3xl p-2 border-heading hover:bg-heading group mr-2">
            <x-navlink href="{{ route('login') }}" :useWireNavigate="true" class="text-heading group-hover:text-white hover:text-white">Login</x-navlink>
        </div>
        <div class="cursor-pointer rounded-3xl p-2 bg-heading text-white hover:bg-white group hover:border hover:border-heading">
            <x-navlink href="{{ route('register') }}" :useWireNavigate="true" class="text-white group-hover:text-heading">Register</x-navlink>
        </div>
      </x-navmenu>    
    </header>
    <main id="main">
        {{-- Hero Section --}}
        <x-hero></x-hero>
        {{-- Content --}}
        <div class="mx-16">
            <h2 data-aos="fade-up" data-aos-duration="1000" class="font-extrabold text-3xl leading-[1.1] sm:text-3xl md:text-5xl my-20 text-heading text-center">Mengapa memilih Avesta?</h2>
            <x-whyus></x-whyus>
            <x-aboutus id=#about></x-aboutus>
            <h2 data-aos="fade-up" data-aos-duration="1000" class="font-extrabold text-3xl leading-[1.1] sm:text-3xl md:text-5xl my-20 text-heading text-center">Bagaimana Cara Pesan?</h2>
            <x-orderguide></x-orderguide>
            <h2 data-aos="fade-up" data-aos-duration="1000" class="font-extrabold text-3xl leading-[1.1] sm:text-3xl md:text-5xl my-20 text-heading text-center">Daftar Mitra Toko</h2>
            <x-brand></x-brand>
            <h2 data-aos="fade-up" data-aos-duration="1000" class="font-extrabold text-3xl leading-[1.1] sm:text-3xl md:text-5xl my-20 text-heading  text-center ">Testimoni</h2>
            <div data-aos="zoom-in" data-aos-duration="1000">
              @livewire('testimonialscard')
            </div>
        </div>
    </main>
    <footer id="footer" class="mt-12 hidden md:block">
        <x-footer></x-footer>
    </footer>
</x-layouts.app>
