<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Keranjang;
use Livewire\Attributes\On;

class ProductCounter extends Component
{
    public $quantity = 1;

    public function increment()
    {
        $this->quantity++;
    }

    public function decrement()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    

    public function render()
    {
        return view('livewire.product-counter');
    }
}