<?php

namespace App\Livewire;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\Order;

class Pickup extends Component
{
    public $orderId;
    public $namaWarung;
    public $alamatWarung;
    public $paymentDate; // Tambahkan properti untuk paymentDate


    public function mount()
    {
        $this->paymentDate = Carbon::now('Asia/Jakarta')->addDay()->translatedFormat('l, d F Y H.i');
        // Ambil order berdasarkan order_id
        $order = Order::with('warung')->find(request()->query('order_id'));
        $this->orderId = request()->query('order_id'); // Ambil order_id dari query string
        // Pastikan order ditemukan
        if (!$order) {
            session()->flash('error', 'Order tidak ditemukan.');
            return redirect()->route('detailspayment'); // Redirect jika order tidak ditemukan
        }

        // Ambil data warung dari relasi
        $this->namaWarung = $order->warung->nama_warung ?? 'Nama warung tidak tersedia';
        $this->alamatWarung = $order->warung->alamat_warung ?? 'Alamat warung tidak tersedia';
    }

    public function render()
    {
        return view('pickup');
    }
}