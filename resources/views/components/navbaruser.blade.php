<nav class="relative">
  <div class="navbar fixed mx-auto rounded-lg bg-pink shadow-md z-50">
      <div class="navbar-start">
        <a wire:navigate href="{{ route('home') }}">
          <img class="navbar-item h-12 m-2 ml-4" src="{{ asset('image/avesta2.png') }}" alt="Avesta Logo">
        </a>  
          <div class="rounded-3xl p-1 mx-4 mt-2 bg-white text-pink group group hover:border hover:scale-110">
              <x-navlink href="{{ route('mitra') }}" wire:navigate class="text-pink group-hover:text-heading">Mitra</x-navlink>
          </div>
      </div>
      <div class="navbar-center w-[600px]">
          <div class="bg-white flex px-4 py-3 rounded-full overflow-hidden w-full mx-auto">
              <form action="" id="filter-form" class="w-full">
                  <input type="text" name="q" value="{{request()->q??''}}" placeholder="Cari Ayam" class="w-full outline-none text-black text-sm" />
              </form>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="16px" class="fill-pink font-bold">
                  <path d="M190.707 180.101l-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z"></path>
              </svg>
          </div>
      </div>
      <div class="navbar-end">
            <div class="flex items-center bg-white rounded-full text-pink px-4">
                <img src="{{ asset('image/pin2.png') }}" alt="Location Icon" class="h-6 w-6"/>
                <select class="select rounded-full text-pink bg-white font-semibold text-lg max-w-xs no-active-effect">
                    <option class="font-semibold">Pogung Baru</option>
                    <option class="font-semibold">Sendangadi</option>
                    <option class="font-semibold">Sinduadi</option>
                    <option class="font-semibold">Sumberadi</option>
                    <option class="font-semibold">Tirtoadi</option>
                    <option class="font-semibold">Tlogoadi</option>
                </select>
            </div>
          <x-button wire:navigate href="{{ route('checkout') }}" class="ml-4 btn-circle bg-white stroke-none hover:bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 text-pink">
                <path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
            </svg>                        
            </x-button>
          <x-dropdown>
              <div class="border-pink border-2 rounded-xl mt-2 mb-2 p-2">
                  <p class="font-semibold text-lg text-pink">{{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }}</p>
                  <p class="text-base text-pink">{{ Auth::user()->email }}</p>
              </div>
              <x-slot:trigger>
                  <x-button class="ml-5 btn-circle btn-outline bg-white stroke-none border-2 hover:bg-white border-white hover:border-white">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FB657A" class="size-6">
                          <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                      </svg>                     
                  </x-button>
              </x-slot:trigger>
              <x-menu-item wire:navigate href="{{ route('purchasehistory') }}" class="hover:bg-pink hover:text-white active:bg-heading" title="Riwayat Pembelian" />
              <x-menu-item wire:navigate href="{{ route('settings') }}" class="hover:bg-pink hover:text-white active:bg-heading" title="Pengaturan" />
              <x-menu-item wire:navigate href="{{route('logout')}}" class="hover:bg-pink hover:text-white active:bg-heading" title="Logout" />
          </x-dropdown>
      </div>
  </div>
</nav>