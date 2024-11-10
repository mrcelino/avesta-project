<div class="relative">
  <div class="navbar fixed mx-auto rounded-lg bg-white shadow-md z-50">
    <div class="navbar-start">
        <img class="navbar-item h-12 m-2 ml-4" src="{{ asset('image/avesta.png') }}">
        {{-- <div class="rounded-3xl p-1 mx-4 mt-2 bg-heading text-white group hover:bg-white group hover:border hover:border-heading">
          <x-navlink href="#" wire:navigate class="text-white group-hover:text-heading">User</x-navlink>
        </div> --}}
    </div>
    <div class="navbar-end  ">
      {{ $slot }}
    </div>
  </div>
</div>