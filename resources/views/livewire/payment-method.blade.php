<section class="bg-white p-4 max-w-2xl mx-auto rounded-xl shadow-md border">
    <h2 class="font-medium">Pilih Metode Pembayaran</h2>

    <div>
        <select wire:model="selectedBank" class="bg-pink text-white select select-bordered w-full rounded-2xl mt-2">
            <option disabled selected>Pilih Metode Pembayaran</option>
            <option value="Mandiri Virtual Account" id="bank">Mandiri Virtual Account</option>
            <option value="BCA Virtual Account" id="bank">BCA Virtual Account</option>
            <option value="BRI Virtual Account" id="bank">BRI Virtual Account</option>
            <option value="BNI Virtual Account" id="bank">BNI Virtual Account</option>
            <option value="BSI Virtual Account" id="bank">BSI Virtual Account</option>
            <option value="Danamon Virtual Account">Danamon Virtual Account</option>
        </select>
    </div>

    <button wire:navigate wire:click="pay" class="bg-pink text-white w-full py-2 mt-4 rounded-3xl font-semibold">
        Bayar
    </button>
</section>
