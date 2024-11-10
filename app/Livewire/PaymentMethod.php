<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class PaymentMethod extends Component
{
    public $selectedBank = null; // Untuk menyimpan bank yang dipilih

    // Fungsi untuk menangani pembayaran dan mengirimkan bank yang dipilih
    public function pay()
    {
        // Simpan pilihan bank dan tanggal pembayaran di session
        session()->put('selectedBank', $this->selectedBank);

        // Set zona waktu Indonesia dan simpan waktu pembayaran dengan zona waktu tersebut
        $paymentDate = Carbon::now('Asia/Jakarta')->translatedFormat('l, d F Y H.i');

        session()->put('paymentDate', $paymentDate);

        // Redirect ke halaman paymentdetails
        return redirect()->route('detailspayment');
    }

    public function render()
    {
        return view('livewire.payment-method');
    }
}