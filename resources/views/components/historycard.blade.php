<div class="bg-white rounded-2xl p-4 border shadow-md flex items-center w-full max-w-4xl">
  <img 
    alt="A plate of raw chicken fillets with various spices around it" 
    class="w-28 h-full rounded-md object-cover" 
    src="{{ asset('image/chicken.png') }}" 
  />
  <div class="ml-4 flex-1">
    <h2 class="text-lg font-semibold">Ayam Dada Fillet 500gr</h2>
    <p>1 x Rp. 30.000</p>
    <p>Best Meat, Pogung</p>
  </div>
  <div class="text-right">
    <p class="mt-6">Total Pembelian</p>
    <p class="text-lg font-semibold">Rp. 30.000</p>
    <div class="mt-2 flex items-center">
      <button 
        class="text-pink mr-4" 
        onclick="document.getElementById('my_modal_3').showModal()"
      >
        Lihat Detail Transaksi
      </button>
      <button class="bg-pink text-white px-4 py-2 rounded-lg font-semibold">
        Beli Lagi
      </button>
    </div>
  </div>
</div>

<dialog id="my_modal_3" class="modal">
  <div class="modal-box max-w-5xl"> <!-- Mengubah lebar maksimum -->
    <form method="dialog">
      <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2 text-pink text-2xl">✕</button>
    </form>
    <h3 class="text-xl font-bold mb-2">Detail Transaksi</h3>
    <div class="bg-[#FFE5E9] rounded-2xl min-h-44 p-4">
      <h3 class="text-lg font-semibold mb-2">Pesanan Selesai</h3>
      <div class="flex bg-white border min-h-16 rounded-2xl mb-2 p-2">
        <div class="flex-1 text-left"> 
          <h3 class="font-medium">Nomor Invoice</h3>
          <h3 class="font-medium">Tanggal Pembelian</h3>
        </div>
        <div class="text-right"> 
          <p>INV/20240902/DF/12345</p>
          <p>02, Oktober 2024, 09:22</p>
        </div>
      </div>
      <h3 class="text-lg font-semibold mb-2">Detail Produk</h3>
      <div class="bg-white border min-h-16 rounded-2xl mb-2">
        <x-detailhistorycard></x-detailhistorycard>
      </div>
      <h3 class="text-lg font-semibold mb-2">Info Pengambilan</h3>
      <div class="bg-white border min-h-16 rounded-2xl mb-2 p-2">
        <h3 class="font-semibold">Best, Meat Pogung</h3>
        <p>Jl. Pandega Marta Jl. Pogung Lor No.107, Pogung Kidul, Sinduadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55284</p>
      </div>
      <h3 class="text-lg font-semibold mb-2">Detail Pembayaran</h3>
      <div class="flex bg-white border min-h-16 rounded-2xl mb-2 p-2">
        <div class="flex-1 text-left"> 
          <h3 class="font-medium">Metode Pembayaran</h3>
          <h3 class="font-medium">Total Pembayaran</h3>
        </div>
        <div class="text-right"> 
          <p>Mandiri Virtual Account</p>
          <p>Rp. 30.000</p>
        </div>
      </div>
    </div>
  </div>
</dialog>
