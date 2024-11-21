<section class="bg-white p-4 max-w-2xl mx-auto rounded-xl shadow-md border">
    <h2 class="font-medium">Pilih Metode Pembayaran</h2>

    <div>
        <select wire:model="selectedBank" class="bg-pink text-white select select-bordered w-full rounded-2xl mt-2">
            <option disabled selected>Pilih Metode Pembayaran</option>
            <option value="Mandiri" id="bank">Mandiri Virtual Account</option>
            <option value="BCA" id="bank">BCA Virtual Account</option>
            <option value="BRI" id="bank">BRI Virtual Account</option>
            <option value="BNI" id="bank">BNI Virtual Account</option>
            <option value="BSI" id="bank">BSI Virtual Account</option>
            <option value="Danamon">Danamon Virtual Account</option>
        </select>
    </div>

    <button wire:navigate wire:click="pay" class="bg-pink text-white w-full py-2 mt-4 rounded-3xl font-semibold">
        Bayar
    </button>
</section>