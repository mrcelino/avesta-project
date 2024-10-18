<x-layouts.app>
    @section('title', 'Avesta')
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
    <main id="main">
        {{-- Hero Section --}}
        <x-hero></x-hero>
        {{-- Content --}}
        <div class="mx-20">
            <h2 data-aos="fade-up" data-aos-duration="1000" class="font-extrabold text-3xl leading-[1.1] sm:text-3xl md:text-5xl my-20 text-heading text-center">Mengapa memilih Avesta?</h2>
            <x-whyus></x-whyus>
            <x-about id=#about></x-about>
            <h2 data-aos="fade-up" data-aos-duration="1000" class="font-extrabold text-3xl leading-[1.1] sm:text-3xl md:text-5xl my-20 text-heading text-center">Bagaimana Cara Pesan?</h2>
            <x-orderguide></x-orderguide>
            <h2 data-aos="fade-up" data-aos-duration="1000" class="font-extrabold text-3xl leading-[1.1] sm:text-3xl md:text-5xl my-20 text-heading text-center">Daftar Mitra Toko</h2>
            <x-brand></x-brand>
            <h2 data-aos="fade-up" data-aos-duration="1000" class="font-extrabold text-3xl leading-[1.1] sm:text-3xl md:text-5xl my-20 text-heading text-center ">Testimoni</h2>
            <x-testimonials></x-testimonials>
        </div>
    </main>
    <footer id="footer" class="mt-12">
        <x-footer></x-footer>
    </footer>
</x-layouts.app>
