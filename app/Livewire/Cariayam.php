<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Unggas;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Url;
use App\Models\Keranjang;


class Cariayam extends Component
{
    use WithPagination;
    #[Url('q')]
    public $searchTerm = '';

    #[Url('sortBy')]
    public $sortBy = 'asc';


    public function render()
    {
        $productsQuery = Unggas::where('jenis_unggas', 'like', '%' . $this->searchTerm . '%')
            ->orWhere('deskripsi', 'like', '%' . $this->searchTerm . '%')
            ->with('warung');

        // Mengatur sorting berdasarkan opsi yang dipilih
        switch ($this->sortBy) {
            case 'asc':
                $productsQuery->orderBy('harga_per_kg', 'asc');
                break;
            case 'desc':
                $productsQuery->orderBy('harga_per_kg', 'desc');
                break;
            case 'terbaru':
                $productsQuery->orderBy('created_at', 'desc');
                break;
            case 'terlaris':
                $productsQuery->orderBy('penjualan', 'desc');
                break;
        }

        $products = $productsQuery->paginate(12);

        return view('cariayam', [
            'products' => $products,
        ]);
    }
    
    public function updateSortBy($sortOption)
    {
        $this->sortBy = $sortOption;
        $this->resetPage(); // Reset pagination saat mengubah sort
    }

    public $user;
    public $nama_depan;
    public $nama_belakang;
    public $email;

    public function mount()
    {
        $this->user = Auth::user(); // Mengambil data user yang sedang login
    }

    public $quantity = 1;

    #[On('add-to-keranjang')] 
    public function addToKeranjang($product)
    {
        // tambahkan produk ke keranjang
        Keranjang::create([
            'id_user' => Auth::id(),
            'id_unggas' => $product,
            'jumlah' => $this->quantity,
            'catatan' => '' 
        ]);

        session()->flash('message', 'Produk berhasil ditambahkan ke keranjang.');
        return redirect()->route('checkout');
    }
}