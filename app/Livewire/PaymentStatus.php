<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PaymentStatus extends Component
{
    public $showPopup = false; // Status popup

    // Method untuk membuka popup
    public function openPopup()
    {
        $this->showPopup = true;
    }

    // Method untuk menutup popup
    public function closePopup()
    {
        $this->showPopup = false;
    }

    public function render()
    {
        return view('livewire.payment-status');
    }
}