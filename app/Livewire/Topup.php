<?php

namespace App\Livewire;

use Livewire\Component;

class Topup extends Component
{
    public $nominal = '';
    public $saldo = 0;

    public function setNominal($amount)
    {
        $this->nominal = $amount;
    }

    public function confirmTopup()
    {
        $this->saldo += (int) str_replace(['rb'], ['000'], $this->nominal); // Konversi '25rb' jadi 25000
        $this->nominal = '';
    }

    public function render()
    {
        return view('topup');
    }
}