<x-layouts.app>
    <div>
        <x-navbarclean></x-navbarclean>
        <section class="items-center text-center pt-32">
            <h2 class="text-2xl font-semibold mb-2">Ambil Pemesanan dalam</h2>
            <livewire:countdown-/>
            <h2 class="text-xl font-medium mb-2">Batas Waktu Pengambilan</h2>
            <h2 class="text-xl font-semibold mb-2">
                {{ $paymentDate}} 
            </h2>
        </section>
        <section class="bg-white p-4 max-w-2xl mx-auto rounded-xl shadow-md border mt-8 ">
            <h2 class="font-medium text-center text-xl mb-2">Alamat Pengambilan</h2>
            <div class="shadow-md border border-gray-200 rounded-2xl">
                <img class="mx-auto rounded-2xl p-4" src="{{ asset('image/pogungstore.png') }}"/>
                <div class="max-w-2xl p-4">
                    <h3 class="font-medium mb-2">
                        {{ $namaWarung }}
                    </h3>
                    <p class="font-semibold">
                        {{ $alamatWarung }}
                    </p>
                </div>
            </div>
        </section>
        <section class="flex w-full max-w-2xl mx-auto rounded-xl mt-4 gap-2 mb-8">
            {{-- <button class=" btn border-2 border-pink bg-white hover:bg-pink hover:text-white w-1/2 custom  text-pink font-semibold py-2 px-4 rounded-2xl" onclick="my_modal_3.showModal()">
                Cek Status Pengambilan
            </button> --}}
            <a href="{{ route('detailspayment', ['order_id' => $orderId]) }}" class="btn border-2 border-pink bg-white hover:bg-pink hover:text-white w-1/2 custom text-pink font-semibold py-2 px-4 rounded-2xl">
                Kembali ke Pembayaran
            </a>
            
            <dialog id="my_modal_3" class="modal">
                <div class="modal-box bg-pink">
                  <form method="dialog">
                    <button class="btn btn-sm btn-circle btn-ghost text-white absolute right-2 top-2">✕</button>
                  </form>
                  <h3 class="text-center text-3xl font-bold text-white mb-4">Pengambilan<br>Terkonfirmasi</h3>
                  <img class="px-12 py-8 flex justify-center" src="{{ asset('image/success.png') }}">
                </div>
            </dialog>
            <a wire:navigate href="{{ route('dashboard') }}" class=" btn w-1/2 bg-pink text-white  hover:bg-pink hover:text-white font-semibold py-2 px-4 rounded-2xl">
                Belanja Lagi
            </a>
        </section>
        <footer class="mt-24"> 
            <x-footer></x-footer>
        </footer>
    </div>
</x-layouts.app>