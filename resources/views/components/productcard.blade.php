@props(['product'=>new \App\Models\Unggas()])
<div class="bg-white rounded-2xl shadow-md border  p-4">
    <img alt="Image of raw chicken pieces on a wooden plate with some vegetables in the background" class="rounded-t-lg w-full" height="400" src="{{ asset('image/chicken.png') }}" width="600"/>
    <div class="p-4">
        <h2 class="text-lg font-semibold">
        {{ $product->jenis_unggas }}
        </h2>
        <p class="text-red-500 text-xl font-bold">
        Rp.{{ number_format($product->harga_per_kg, 0, ',', '.') }}
        </p>
        <p class="text-gray-500">
        {{ $product->deskripsi }}
        </p>
    <div class="flex items-center text-gray-500 text-sm mt-2">
      <i class="fas fa-map-marker-alt text-red-500 mr-1">
      </i>
      <span>
       0.28 km
      </span>
      <span class="mx-1">
       •
      </span>
      <span>
       24 Terjual
      </span>
     </div>
     <div class="flex items-center justify-between mt-4">
      <button class="bg-pink w-full text-white px-4 py-2 rounded-2xl font-bold">
       Pesan
      </button>
     </div>
    </div>
</div>