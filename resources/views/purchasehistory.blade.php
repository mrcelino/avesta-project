<div>
        <x-navbaruser></x-navbaruser>
        <main>
            <div class="container mx-auto p-4 max-w-[1400px]">
                <div class="flex justify-between items-center mb-4 mt-20">
                    <div class="flex space-x-4 bg-cInput w-full rounded-3xl p-2">
                        <div class="px-4 py-2 text-xl font-semibold">Status:</div>
                        <button 
                        class="px-4 py-2 bg-white rounded-3xl shadow-md {{ $filterStatus === 'semua' ? 'border-pink border-2' : '' }}" 
                        wire:click="filterByStatus('semua')">
                        Semua
                        </button>
                        <button 
                        class="px-4 py-2 bg-white rounded-3xl shadow-md {{ $filterStatus === 'berlangsung' ? 'border-pink border-2' : '' }}" 
                        wire:click="filterByStatus('berlangsung')">
                        Berlangsung
                        </button>
                        <button 
                        class="px-4 py-2 bg-white rounded-3xl shadow-md {{ $filterStatus === 'berhasil' ? 'border-pink border-2' : '' }}" 
                        wire:click="filterByStatus('berhasil')">
                        Berhasil
                        </button>
                        <button 
                        class="px-4 py-2 bg-white rounded-3xl shadow-md {{ $filterStatus === 'tidak_berhasil' ? 'border-pink border-2' : '' }}" 
                        wire:click="filterByStatus('tidak_berhasil')">
                        Tidak Berhasil
                        </button>
                    </div>
                </div>
                <div class="grid grid-cols-2 border-2 rounded-2xl p-4 gap-4">
                    <!-- Card 1 -->
                    @foreach ($filteredData as $produk) <!-- Ganti dummyData dengan filteredData -->
                    <x-historycard :produk="$produk" />
                    @endforeach
                </div>                  
            </div>
        </main>
        <footer>
            <x-footer></x-footer>
        </footer>        
</div>