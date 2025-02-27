<div class="relative max-w-xs">
    <!-- Tombol Trigger Dropdown -->
    <div wire:click="toggleDropdown" class="cursor-pointer select rounded-full text-pink bg-white font-semibold text-lg p-3 flex justify-between items-center">
        <span>{{ $selectedOption ?? 'Pilih Lokasi' }}</span>
        <svg class="w-5 h-5" fill="none"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="butt" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </div>

    <!-- Daftar Opsi (Dropdown Menu) -->
    @if($isOpen)
        <div class="absolute -ml-12 z-10 mt-2 p-2 w-full min-w-56 bg-white text-black font-medium rounded-[35px] shadow-xl">
            <ul class="p-2">
                <li wire:click="selectOption('Sendangadi')" class="p-2 hover:bg-pink hover:text-white rounded-lg cursor-pointer">Sendangadi</li>
                <li wire:click="selectOption('Sinduadi')" class="p-2 hover:bg-pink hover:text-white rounded-lg cursor-pointer">Sinduadi</li>
                <li wire:click="selectOption('Tirtoadi')" class="p-2 hover:bg-pink hover:text-white rounded-lg cursor-pointer">Tirtoadi</li>
                <li wire:click="selectOption('Tlogoadi')" class="p-2 hover:bg-pink hover:text-white rounded-lg cursor-pointer">Tlogoadi</li>
            </ul>
        </div>
    @endif
</div>