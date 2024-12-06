<?php

namespace App\Livewire;

use Livewire\Component;

class Payment extends Component
{
    // Deklarasikan properti dengan tipe data yang sesuai
    public $pesananItems = [];
    public $totalBelanja = 0;
    public function mount()
    {
        // Ambil data dari session
        $this->pesananItems = session('pesanan_items', []);
        $this->totalBelanja = session('total_belanja', 0);
    }
    public function render()
    {
        return view('payment');
    }
}