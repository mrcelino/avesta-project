<div class="relative">
  <div class="navbar fixed mx-auto rounded-lg bg-white shadow-md z-50">
    <div class="navbar-start">
        <a wire:navigate href="{{ route('home') }}">
          <img class="navbar-item h-12 m-2 ml-4" src="{{ asset('image/avesta.png') }}" alt="Avesta Logo">
        </a>    
        <div class="rounded-3xl p-1 mx-4 mt-2 bg-heading text-white group hover:bg-white group hover:border hover:border-heading hidden md:block">
          <x-navlink href="{{ route('mitra') }}" wire:navigate class="text-white group-hover:text-heading ">Mitra</x-navlink>
        </div>
    </div>
    <div class="navbar-end  ">
      {{ $slot }}
    </div>
  </div>
</div>