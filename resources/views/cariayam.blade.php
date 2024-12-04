    <div>
        <x-navbaruser></x-navbaruser>
        <main>
            <div class="container mx-auto p-4">
                <div class="flex justify-between items-center mb-4 mt-20">
                    <div class="flex space-x-4 bg-cInput w-full rounded-3xl p-2">
                        <div class="px-4 py-2 text-xl font-semibold">Urutkan:</div>
                        <button wire:click="updateSortBy('terbaru')" class="px-4 py-2 bg-white rounded-3xl shadow-md" value="terbaru">Terbaru</button>
                        <button wire:click="updateSortBy('terbaru')" class="px-4 py-2 bg-white rounded-3xl shadow-md" value="terlaris">Terlaris</button>
                        <select wire:model="sortBy" name="sortBy" form="filter-form" onchange="this.form.submit()" class="select select-bordered px-4 py-2 bg-white rounded-3xl shadow-md max-w-xs">
                            <option disabled selected>Harga</option>
                            <option class="hover:bg-pink hover:text-white active:bg-heading" value="asc">Termurah</option>
                            <option class="hover:bg-pink hover:text-white active:bg-heading" value="desc">Termahal</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-4 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-4">
                    @foreach($products as $product)
                    <x-productcard :product="$product"></x-productcard>
                    @endforeach
                </div>
                <div class="join flex justify-center mt-14">
                    @foreach(range(1, $products->lastPage()) as $page)
                    <button class=" btn btn-lg glass rounded-2xl mx-2 {{ $page == $products->currentPage() ? 'text-white bg-pink rounded-full' : '' }}" 
                    onclick="window.location.href='{{ $products->url($page) }}'"
                    >
                        {{ $page }}
                    </button>
                    @endforeach
                </div>
            </div>
        </main>
        <footer class="mt-12">
            <x-footer></x-footer>
        </footer>
    </div>