<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Order;

class Paymentdetails extends Component
{
    public $orderId;  // Properti untuk menerima order_id dari query string
    public $order;    // Properti untuk menyimpan data order
    public $status;   // Properti untuk menyimpan status order
    public $showModal; // Properti untuk menentukan modal mana yang akan ditampilkan

    // Method mount untuk mengambil order berdasarkan orderId
    public function mount()
    {
        // Ambil orderId dari query string
        $this->orderId = request()->query('order_id');

        // Ambil data order berdasarkan orderId
        $this->order = Order::find($this->orderId);

        // Pastikan order ditemukan
        if (!$this->order) {
            session()->flash('error', 'Order tidak ditemukan.');
            return redirect()->route('payment'); // Redirect ke halaman payment jika order tidak ditemukan
        }

        // Set status order
        $this->status = $this->order->status_order;

        // Tentukan modal yang akan ditampilkan berdasarkan status_order
        if ($this->status == 'processed') {
            $this->showModal = 'my_modal_31';
        } elseif ($this->status == 'completed') {
            $this->showModal = 'my_modal_3';
        } else {
            $this->showModal = null; // Tidak ada modal yang ditampilkan
        }
    }
    public function redirectToPickup()
    {
        // Redirect ke halaman pickup dengan menyertakan order_id
        return redirect()->route('pickup', ['order_id' => $this->orderId]);
    }


    public function render()
    {
        return view('paymentdetails');  // Pastikan nama view sesuai dengan path yang benar
    }
}