<x-layouts.app>
    @section('title', 'Avesta')
    <div>
        <header>
            <x-navmenu>
                <x-navlink href="{{ route('mitra') }}" useWireNavigate="true" class="hover:text-heading nav-link pb-1">Home</x-navlink>
                <x-navlink href="/admin"  class=" hover:text-heading nav-link pb-1">Dashboard</x-navlink>
                <x-navlink href="{{ route('aboutmitra') }}" :useWireNavigate="true" class=" hover:text-heading nav-link pb-1">Tentang</x-navlink>
                <x-navlink href="{{ route('contactmitra') }}" :useWireNavigate="true" class=" text-heading border-b-4 border-pink  pb-1">Hubungi</x-navlink>
                @guest
                <div class="cursor-pointer border rounded-3xl p-2 border-heading hover:bg-heading group mr-2">
                    <x-navlink href="{{ route('login') }}" :useWireNavigate="true" class="text-heading group-hover:text-white hover:text-white">Login</x-navlink>
                </div>
                <div class="cursor-pointer rounded-3xl p-2 bg-heading text-white hover:bg-white group hover:border hover:border-heading">
                    <x-navlink href="{{ route('registermitra') }}" :useWireNavigate="true" class="text-white group-hover:text-heading">Register</x-navlink>
                </div>
                @endguest
                @auth
                <x-dropdown>
                    <div class="border-pink border-2 rounded-xl mt-2 mb-2 p-2">
                        <p class="font-semibold text-lg text-pink">{{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }}</p>
                        <p class="text-base text-pink">{{ Auth::user()->email }}</p>
                    </div>
                    <x-slot:trigger>
                      <x-button class="ml-5 btn-circle bg-pink btn-outline group hover:bg-pink stroke-none border-2 border-heading hover:border-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFF" class="size-6 group-hover:fill-white">
                            <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                          </svg>                     
                      </x-button>
                    </x-slot:trigger>
                    <x-menu-item wire:navigate href="{{route('logout')}}" class="hover:bg-pink hover:text-white active:bg-heading" title="Logout" />
                </x-dropdown>
                @endauth
              </x-navmenu>  
        </header>
        <main>
            <x-contact></x-contact>
        </main>
        <footer>
            <x-footer/>
        </footer>
    </div>
</x-layouts.app>