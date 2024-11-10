<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Unggas;

class Product extends Component
{
    public function searchByType($jenis_unggas)
    {
        $products = Unggas::where('jenis_unggas', 'like', '%' . $jenis_unggas . '%')->get();

        return view('cariayam', compact('products', 'jenis_unggas'));
    }
    public function render()
    {
        return view('product');
    }
}