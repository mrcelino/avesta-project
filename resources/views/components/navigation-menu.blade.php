<div class="navbar navbar-sticky mx-auto rounded-lg">
    <div class="navbar-start">
        <img class="navbar-item h-16" src="{{ asset('image/avesta.png') }}">
        <div class="rounded-3xl p-1 mx-4 mt-2 bg-heading text-white group hover:bg-white group hover:border hover:border-heading">
          <x-navlink href="#" wire:navigate class="text-white group-hover:text-heading">Mitra</x-navlink>
        </div>
    </div>
    <div class="navbar-end ">
      {{ $slot }}
    </div>
</div>