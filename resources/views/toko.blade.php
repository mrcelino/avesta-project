<x-layouts.app>
    <div>
        <x-navbaruser></x-navbaruser>
        <main>
            <div class="container mx-auto p-4 justify-center items-center">
                <div class="bg-white rounded-lg  p-6 flex items-center space-x-6 mt-20 mb-6">
                    <img alt="A woman and a child standing in front of a meat counter" class="w-32 h-32 rounded-3xl object-cover" height="150" src="https://storage.googleapis.com/a1aa/image/LhjregsBbaQOX6eL5uDGJKysqjbQ1KPZreVRI85jMe2GJ2DPB.jpg" width="150"/>
                    <div class="ml-4">
                     <h2 class="text-2xl font-bold">
                      Best Meat, Pogung
                     </h2>
                     <p class="mt-4 font-medium">
                      Best Meat menjual berbagai daging berkualitas yang siap dikonsumsi.
                     </p>
                     <div class="flex space-x-4 mt-4">
                      <div class="flex items-center space-x-2 border-2 p-2 rounded-lg">
                       <i class="fas fa-map-marker-alt text-pink">
                       </i>
                       <div>
                        <p class="text-xl font-semibold">
                         0,28 km
                        </p>
                        <p class="text-pink">
                         Jarak
                        </p>
                       </div>
                      </div>
                      <div class="flex items-center space-x-2 border-2 p-2 rounded-lg">
                       <i class="fas fa-tag text-pink">
                       </i>
                       <div>
                        <p class="text-xl font-semibold">
                         100+
                        </p>
                        <p class="text-pink">
                         Penjualan
                        </p>
                       </div>
                      </div>
                      <div class="flex items-center space-x-2 border-2 p-2 rounded-lg">
                       <i class="fas fa-comments text-pink">
                       </i>
                       <div>
                        <p class="text-xl font-semibold">
                         Chat
                        </p>
                        <p class="text-pink">
                         Penjual
                        </p>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                <h3 class="font-semibold text-2xl mb-2">Daftar Produk</h3>
                <div class="grid grid-cols-4 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-4">
                    @foreach($products as $product)
                    <x-productcard :product="$product"></x-productcard>
                    @endforeach
                </div>
            </div>
        </main>
        <footer class="mt-12">
            <x-footer></x-footer>
        </footer>
    </div>
</x-layouts.app>