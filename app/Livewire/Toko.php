<?php

namespace App\Livewire;
use App\Models\Unggas;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Component;

class Toko extends Component
{
    use WithPagination;
    #[Url('q')]
    public $searchTerm = '';
    
    #[Url('sortBy')]
    public $sortBy = 'asc';
    public function render()
    {
        // Tambahkan with('warung') untuk memuat relasi warung
        $products = Unggas::with('warung')
            ->where('jenis_unggas', 'like', '%' . $this->searchTerm . '%')
            ->orWhere('deskripsi', 'like', '%' . $this->searchTerm . '%')
            ->orderBy('harga_per_kg', $this->sortBy)
            // ->get();
            ->paginate(12); // Paginate dengan 12 produk per halaman

        return view('toko', [
            'products' => $products
        ]);
    }
}