<div>
    <x-navbaruser></x-navbaruser>
    <div class="flex flex-col justify-center min-h-screen">
        <div class="flex flex-col justify-start mx-auto min-h-96 w-[45%]">
            <div class="flex flex-row items-center gap-4">
                <img src="{{ asset('image/coin.svg') }}" alt="Coin Icon" class="size-5 object-cover"/>
                <h2 class="text-xl font-semibold">AvestaPay</h2>
            </div>
            <h2 class="font-semibold text-[#717171] text-lg mt-2">Rp {{ number_format($saldo, 0, ',', '.') }}</h2>
            <h2 class="flex font-semibold text-black justify-end pr-2 text-lg mt-4">Topup</h2>
            
            <input type="text" wire:model="nominal" class="border-2 border-gray-200 rounded-2xl w-full p-2 mt-4" placeholder="Rp"/>

            <div class="grid grid-cols-4 gap-8 mt-4">
                @foreach (['25rb', '50rb', '75rb', '100rb'] as $amount)
                    <button wire:click="setNominal('{{ $amount }}')" class="flex items-center justify-center min-h-10 border-2 rounded-2xl px-2 py-2 w-36 hover:bg-pink hover:text-white transition duration-300">
                        {{ $amount }}
                    </button>
                @endforeach
            </div>

            <div class="flex flex-row mt-10 w-full mx-auto gap-5">
                <a href="#" class="btn border-2 border-pink bg-white hover:bg-pink hover:text-white w-1/2 text-pink font-semibold py-2 px-4 rounded-2xl">
                    Batal
                </a>
                <button wire:click="confirmTopup" class="btn w-1/2 bg-pink text-white font-semibold py-2 px-4 rounded-2xl">
                    Konfirmasi
                </button>
            </div>
        </div>
    </div>
    <x-footer class="items-end"></x-footer>
</div>
