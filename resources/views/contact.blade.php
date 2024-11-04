<x-layouts.app>
    @section('title', 'Avesta')
    <div>
        <header>
            <x-navmenu>
                <x-navlink href="{{ route('home') }}" :useWireNavigate="true">Home</x-navlink>
                <x-navlink href="{{ route('product') }}" :useWireNavigate="true" >Produk</x-navlink>
                <x-navlink href="{{ route('about') }}" :useWireNavigate="true">Tentang</x-navlink>
                <x-navlink href="{{ route('contact') }}" :useWireNavigate="true">Hubungi</x-navlink>
                <div class="border rounded-3xl p-2 border-heading hover:bg-heading group mr-2">
                  <x-navlink href="{{ route('login') }}" :useWireNavigate="true" class="text-heading group-hover:text-white ">Login</x-navlink>
                </div>
                <div class="rounded-3xl p-2 bg-heading text-white hover:bg-white group hover:border hover:border-heading">
                  <x-navlink href="{{ route('register') }}" :useWireNavigate="true" class="text-white group-hover:text-heading">Register</x-navlink>
                </div>
              </x-navmenu>
        </header>
        <main>
            <section class="bg-pink flex items-center justify-center min-h-[600px]" style="background-image: url('/image/bghero.png');">
                <div class="text-center text-white max-w-5xl mx-auto px-2 py-8">
                    <h1 class="text-6xl font-bold mb-6 mt-10">Ada Pertanyaan?</h1>
                    <p class="text-lg leading-relaxed font-medium">
                        Jika Anda membutuhkan informasi lebih lanjut tentang layanan kami atau mengalami kesulitan, jangan ragu untuk menghubungi kami. Tim kami siap membantu Anda kapan saja!
                    </p>
                </div>
            </section>
            <section class="py-8 mx-20 bg-white">
                    <h2 class="text-2xl font-bold text-pink mb-4">Kami Siap Membantu!</h2>
                    <p class="text-lg text-pink font-medium">Email: support@avesta.com</p>
                    <p class="text-lg text-pink font-medium">Telepon: 0800-123-456</p>
            </section>
        </main>
        <footer>
            <x-footer/>
        </footer>
    </div>
</x-layouts.app>