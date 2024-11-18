<!-- Transaksi 1 -->
<div class="bg-white rounded-2xl p-4 border shadow-md flex items-center w-full max-w-4xl">
  <img alt="Product Image" class="w-28 h-full rounded-md object-cover" src="{{ asset('image/chicken.png') }}" />
  <div class="ml-4 flex-1">
    <h2 class="text-lg font-semibold">{{ $produk['product_name'] }}</h2>
    <p class="font-medium">{{ $produk['quantity_kg'] }} x Rp. {{ number_format($produk['price_per_kg'], 0, ',', '.') }}</p>
    <p class="font-medium">Best Meat Pogung</p>    
  </div>
  <div class="text-right">
    <p class="mt-6">Total Pembelian</p>
    <p class="text-lg font-semibold">Rp. {{ number_format($produk['total_price'], 0, ',', '.') }}</p>
    <div class="mt-2 flex items-center">
      <button class="text-pink mr-4" onclick="showModal('{{ $produk['product_name'] }}', '{{ $produk['quantity_kg'] }}', '{{ $produk['price_per_kg'] }}', '{{ $produk['total_price'] }}', '{{ $invoice['number'] }}', '{{ $invoice['date'] }}', '{{ $invoice['payment_method'] }}')">
        Lihat Detail Transaksi
      </button>
      
      <button wire:navigate href="dashboard" class="bg-pink text-white px-4 py-2 rounded-lg font-semibold">
        Beli Lagi
      </button>
    </div>
  </div>
</div>

<!-- Modal -->
<dialog id="my_modal_3" class="modal">
  <div class="modal-box max-w-5xl">
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
          <p id="invoiceNumber"></p>
          <p id="invoiceDate"></p>
        </div>
      </div>
      <h3 class="text-lg font-semibold mb-2">Detail Produk</h3>
      <div class="bg-white border min-h-16 rounded-2xl mb-2">
        <div class="flex items-center p-2">
          <img src="{{ asset('image/chicken.png') }}" class="w-28 h-full rounded-md object-cover" />
          <div class="ml-4 flex-1">
            <h3 id="productName" class="font-semibold"></h3>
            <p id="productQuantity"></p>
            <p>Best Meat Pogung</p>
          </div>
          <div class="text-right flex flex-col items-end mr-2 mb-2">
            <p class="mt-4">Total Pembelian</p>
            <p id="totalPrice" class="text-lg font-semibold"></p>
            <div class="mt-2">
              <button wire:navigate href="dashboard" class="bg-pink text-white px-4 py-2 rounded-lg font-semibold">
                Beli Lagi
              </button>
            </div>
          </div>
        </div>
      </div>
      <h3 class="text-lg font-semibold mb-2">Info Pengambilan</h3>
      <div class="bg-white border min-h-16 rounded-2xl mb-2 p-2">
        <h3 class="font-semibold">Best Meat Pogung</h3>
        <p>Jl. Pandega Marta Jl. Pogung Lor No.107, Pogung Kidul, Sinduadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55284</p>
      </div>
      <h3 class="text-lg font-semibold mb-2">Detail Pembayaran</h3>
      <div class="flex bg-white border min-h-16 rounded-2xl mb-2 p-2">
        <div class="flex-1 text-left"> 
          <h3 class="font-medium">Metode Pembayaran</h3>
          <h3 class="font-medium">Total Pembayaran</h3>
        </div>
        <div class="text-right"> 
          <p id="paymentMethod"></p>
          <p id="paymentTotal"></p>
        </div>
      </div>
    </div>
  </div>
</dialog>


<script>
  function showModal(productName, quantityKg, pricePerKg, totalPrice, invoiceNumber, invoiceDate, paymentMethod) {
  document.getElementById('productName').innerText = productName + " " + quantityKg + "kg";
  document.getElementById('productQuantity').innerText = quantityKg + " x Rp. " + new Intl.NumberFormat().format(pricePerKg);
  document.getElementById('totalPrice').innerText = "Rp. " + new Intl.NumberFormat().format(totalPrice);
  document.getElementById('invoiceNumber').innerText = invoiceNumber;
  document.getElementById('invoiceDate').innerText = invoiceDate;
  document.getElementById('paymentMethod').innerText = paymentMethod;
  document.getElementById('paymentTotal').innerText = "Rp. " + new Intl.NumberFormat().format(totalPrice);


  document.getElementById('my_modal_3').showModal();
}
</script>