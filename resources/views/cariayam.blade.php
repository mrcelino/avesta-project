<x-layouts.app>
    <div>
        <x-navbaruser></x-navbaruser>
        <main>
            <div class="container mx-auto p-4">
                <div class="flex justify-between items-center mb-4 mt-20">
                    <div class="flex space-x-4 bg-cInput w-full rounded-3xl p-2">
                        <div class="px-4 py-2 text-xl font-semibold">Urutkan:</div>
                        <button class="px-4 py-2 bg-white rounded-3xl shadow-md">Terbaru</button>
                        <button class="px-4 py-2 bg-white rounded-3xl shadow-md">Terlaris</button>
                        <select wire:model="sortBy" name="sortBy" form="filter-form" onchange="this.form.submit()" class="select select-bordered px-4 py-2 bg-white rounded-3xl shadow-md max-w-xs">
                            <option disabled selected>Harga</option>
                            <option value="asc">Termurah</option>
                            <option value="desc">Termahal</option>
                        </select>                        
                    </div>
                </div>
                <div class="grid grid-cols-4 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-4">
                    @foreach($products as $product)
                    <x-productcard :product="$product"></x-productcard>
                    @endforeach
                </div>
                <div class="join grid grid-cols-2 mt-4 gap-8 rounded-2xl">
                        <!-- Tombol Previous Page -->
                        @if ($products->onFirstPage())
                            <button class="btn bg-pink text-white rounded-2xl" disabled>Previous page</button>
                        @else
                            <button wire:click="previousPage" wire:loading.attr="disabled" class="btn bg-pink text-white rounded-2xl btn-outline">Previous page</button>
                        @endif
                    
                        <!-- Tombol Next Page -->
                        @if ($products->hasMorePages())
                            <button wire:click="nextPage" wire:loading.attr="disabled" class="btn bg-pink text-white rounded-2xl">Next</button>
                        @else
                            <button class="btn bg-pink text-white rounded-2xl btn-outline" disabled>Next</button>
                        @endif    
                </div>
            </div>
        </main>
        <footer class="mt-12">
            <x-footer></x-footer>
        </footer>
    </div>
</x-layouts.app>