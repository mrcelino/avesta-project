<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Unggas;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;

class Cariayam extends Component
{
    #[Url('q')]
    public $searchTerm = '';

    #[Url('sortBy')]
    public $sortBy = 'asc';

    public function render()
    {
        $products = Unggas::where('jenis_unggas', 'like', '%' . $this->searchTerm . '%')
            ->orWhere('deskripsi', 'like', '%' . $this->searchTerm . '%')
            ->orderBy('harga_per_kg', $this->sortBy)
            ->get();

        return view('cariayam', [
            'products' => $products
        ]);
    }
}
