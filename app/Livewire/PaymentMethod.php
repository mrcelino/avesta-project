<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class PaymentMethod extends Component
{
    public $selectedBank = null; // Untuk menyimpan bank yang dipilih
    public $totalBelanja = 0; // Tambahkan properti untuk total belanja

    // Fungsi untuk menangani pembayaran dan mengirimkan bank yang dipilih
    public function pay()
    {
        // Ambil total belanja dari session sebelumnya (yang dibuat di Checkout)
        $this->totalBelanja = session('total_belanja', 0);

        // Simpan pilihan bank dan tanggal pembayaran di session
        session()->put('selectedBank', $this->selectedBank);

        // Set zona waktu Indonesia dan simpan waktu pembayaran dengan zona waktu tersebut
        $paymentDate = Carbon::now('Asia/Jakarta')->addMinutes(20)->translatedFormat('l, d F Y H.i');

        session()->put('paymentDate', $paymentDate);

        // Simpan total belanja ke session dengan format rupiah
        session()->put('totalBelanja', 'Rp. ' . number_format($this->totalBelanja, 0, ',', '.'));
        $orderId = session('order_id');
    
        // Jika tidak ada order_id, redirect ke halaman sebelumnya
        if (!$orderId) {
            return redirect()->route('payment')->with('error', 'Order ID tidak ditemukan.');
        }
    
        // Redirect ke detail payment dengan membawa order_id
        return redirect()->route('detailspayment', ['order_id' => $orderId]);        
    }

    public function mount()
    {
        // Opsional: Ambil total belanja dari session saat komponen dimuat
        $this->totalBelanja = session('total_belanja', 0);
    }

    public function render()
    {
        return view('livewire.payment-method', [
            'totalBelanja' => $this->totalBelanja
        ]);
    }
}