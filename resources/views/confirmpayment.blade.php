<div>
    <x-navbaruser></x-navbaruser>
    <div class="min-h-screen flex flex-col gap-y-4 items-center justify-center">
        <h2 class="font-semibold text-xl">Masukkan PIN AvestaPay Kamu</h2>
        <input 
            type="password" 
            wire:model="pin" 
            class="w-28 bg-white border-pink-500 border-2 rounded-xl size-10 px-2 active:border-pink-500"
            maxlength="8"
        >
        <div class="flex flex-row mt-7 gap-5">
            <button 
                wire:click="cancel" 
                class="btn border-2 border-pink-500 bg-white hover:bg-pink-500 hover:text-white w-56 text-pink-500 font-semibold py-2 px-4 rounded-2xl">
                Batal
            </button>
            <button 
                wire:click="verifyPin" 
                href="#" 
                class="btn w-56 bg-pink text-white hover:bg-pink-500 hover:text-white font-semibold py-2 px-4 rounded-2xl">
                Konfirmasi
            </button>
        </div>

        <!-- Modal PIN Salah -->
        <dialog id="my_modal_31" class="modal" {{ $showErrorModal ? 'open' : '' }}>
            <div class="modal-box bg-pink">
                <form method="dialog">
                    <button wire:click="$set('showErrorModal', false)" class="btn btn-sm btn-circle btn-ghost text-white absolute right-2 top-2">✕</button>
                </form>
                <h3 class="text-center text-3xl font-bold text-white mb-4">PIN SALAH</h3>
                <img class="px-12 py-8 flex justify-center mx-auto" src="{{ asset('image/gagal.png') }}">
            </div>
        </dialog>
    
        <!-- Modal PIN Benar -->
        <dialog id="my_modal_3" class="modal" {{ $showSuccessModal ? 'open' : '' }}>
            <div class="modal-box bg-pink">
                <form method="dialog">
                    <button wire:click="$set('showSuccessModal', false)" class="btn btn-sm btn-circle btn-ghost text-white absolute right-2 top-2">✕</button>
                </form>
                <h3 class="text-center text-3xl font-bold text-white mb-4">Pembayaran <br>Terkonfirmasi</h3>
                <img class="px-12 py-8 flex justify-center" src="{{ asset('image/success.png') }}">
            </div>
        </dialog>
    </div>
    <x-footer class="items-end"></x-footer>

    <!-- Script untuk membuka modal di Livewire 3 -->
    @push('scripts')
    <script>
        window.addEventListener('open-modal', event => {
            const modal = document.getElementById(event.detail.modal);
            if (modal) {
                modal.showModal();
            }
        });
    </script>
    @endpush
</div>