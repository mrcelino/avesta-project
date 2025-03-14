<x-layouts.app>
    @section('title', 'Avesta')
    <div>
        <header>
            <x-navmenu>
                <x-navlink href="{{ route('home') }}" useWireNavigate="true" class="hover:text-heading nav-link pb-1">Home</x-navlink>
                <x-navlink href="{{ route('product') }}" :useWireNavigate="true" class=" hover:text-heading nav-link pb-1">Produk</x-navlink>
                <x-navlink href="{{ route('about') }}" :useWireNavigate="true" class=" hover:text-heading nav-link pb-1">Tentang</x-navlink>
                <x-navlink href="{{ route('contact') }}" :useWireNavigate="true" class=" text-heading border-b-4 border-pink  pb-1">Hubungi</x-navlink>
                <div class="cursor-pointer border rounded-3xl p-2 border-heading hover:bg-heading group mr-2">
                    <x-navlink href="{{ route('login') }}" :useWireNavigate="true" class="text-heading group-hover:text-white hover:text-white">Login</x-navlink>
                </div>
                <div class="cursor-pointer rounded-3xl p-2 bg-heading text-white hover:bg-white group hover:border hover:border-heading">
                    <x-navlink href="{{ route('register') }}" :useWireNavigate="true" class="text-white group-hover:text-heading">Register</x-navlink>
                </div>
              </x-navmenu>  
        </header>
        <main>
            <section class="bg-pink flex items-center justify-center min-h-[600px] bg-cover" style="background-image: url('/image/bghero.png');">
                <div class="text-center text-white max-w-5xl mx-auto px-2 py-8">
                    <h1 class="text-6xl font-bold mb-6 mt-10">Ada Pertanyaan?</h1>
                    <p class="text-lg leading-relaxed font-medium">
                        Jika Anda membutuhkan informasi lebih lanjut tentang layanan kami atau mengalami kesulitan, jangan ragu untuk menghubungi kami. Tim kami siap membantu Anda kapan saja!
                    </p>
                </div>
            </section>
            <section class="py-8 mx-20 bg-white">
                    <h2 class="text-2xl font-bold text-pink mb-4">Kami Siap Membantu!</h2>
                    {{-- <p class="text-lg text-pink font-medium">Email: support@avesta.com</p>
                    <p class="text-lg text-pink font-medium">Telepon: 0800-123-456</p> --}}
                    <p class="text-lg text-pink font-medium mb-4">Apabila Anda memiliki pertanyaan dan saran mengenai layanan kami yang tidak dapat ditemukan di Pusat Bantuan, <br>mohon menghubungi <a href="#"class="font-bold underline">mitraavesta@avesta.com </a> atau <a href="https://wa.me/6282331462202?text=Halo%2C%20tim%20Avesta%21%20Saya%20membutuhkan%20bantuan%20terkait%20layanan%20Avesta.%20Bisakah%20saya%20mendapatkan%20panduan%20atau%20informasi%20lebih%20lanjut%2C%20Terima%20kasih." class="font-bold underline">whatsapp</a> kami untuk segera dibantu.</p>
                    <p class="text-lg text-pink font-medium max-w-6xl mb-2"><span class="font-bold">PERHATIAN:</span> Karyawan dan petugas Avesta tidak akan pernah meminta transfer dana ataupun menanyakan PIN, kode OTP, nomor kartu ATM/kredit, nama gadis ibu kandung, dan identitas lainnya. Semua informasi tersebut sangat bersifat rahasia dan hanya diketahui oleh Anda. Jika Anda menerima email atau telepon mencurigakan yang mengatasnamakan Avesta, silakan adukan ke Pusat Bantuan Mitra Usaha Avesta melalui <a href="#" class="font-bold underline">mitraavesta@avesta.com</a></p>
            </section>
        </main>
        <footer>
            <x-footer/>
        </footer>
    </div>
</x-layouts.app>