<div>
    <div wire:loading.class="opacity-5 transition duration-1000">
        <div class="hidden md:flex w-full gap-4 mx-auto mt-20 h-[415px] justify-center">
            <!-- Loop untuk menampilkan setiap card -->
            @foreach ($cards as $card)
                <div class="border-2 rounded-3xl shadow-md overflow-hidden flex w-1/2 h-full transition-all duration-500 ease-in-out transform">
                    <div class="w-1/3 ">
                        <img class="h-full w-full object-cover transition-transform duration-500 ease-in-out" src="{{ asset($card['image']) }}" alt="Gambar Toko">
                    </div>
                    <div class="w-2/3 p-8 flex flex-col py-2">
                        <p class="text-heading mt-12 text-xl">{{ $card['review'] }}</p>
                        <h3 class="mt-32 text-heading font-bold text-2xl">{{ $card['name'] }}</h3>
                        <h3 class="mt-2 text-heading">{{ $card['job'] }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Lingkaran untuk mengontrol card -->
    <div class="flex space-x-2 mt-4">
        @foreach ([0, 1, 2, 3] as $index)
            <span wire:click="updateCards({{ $index }})" class="w-3 h-3 bg-pink rounded-full cursor-pointer"></span>
        @endforeach
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let currentIndex = 1;
        const circles = document.querySelectorAll('[wire\\:click^="updateCards"]');
        
        // Fungsi untuk pindah ke card selanjutnya
        function nextCard() {
            // Klik lingkaran sesuai dengan index berikutnya
            circles[currentIndex].click();

            // Update index
            currentIndex = (currentIndex + 1) % circles.length;
        }

        // Jalankan setiap 3 detik
        setInterval(nextCard, 4000);
    });
</script>


