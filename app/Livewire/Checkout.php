<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Keranjang;
use App\Models\Order;
use App\Models\OrderItem;

class Checkout extends Component
{
    public $user;
    public $nama_depan;
    public $nama_belakang;
    public $email;

    public $keranjangItems; 
    public $catatan = [];
    public $jumlah = [];
    public $totalBelanja = 0;

    public function mount()
    {
        $this->user = Auth::user(); // Mengambil data user yang sedang login

        $this->loadKeranjang();
    }
    

    public function loadKeranjang()
    {
        $this->keranjangItems = Keranjang::where('id_user', Auth::id())
        ->with(['unggas', 'unggas.warung']) // Eager loading relasi
        ->get();
        $this->totalBelanja = 0;
        foreach ($this->keranjangItems as $item) {
            $this->jumlah[$item->id_keranjang] = $item->jumlah;
            $this->catatan[$item->id_keranjang] = $item->catatan;
            $this->totalBelanja += $item->unggas->harga_per_kg * $item->jumlah;
        }
    }

    public function updateKeranjang()
    {
        foreach ($this->keranjangItems as $item) {
            $item->update([
                'jumlah' => $this->jumlah[$item->id_keranjang],
                'catatan' => $this->catatan[$item->id_keranjang],
            ]);
        }

        session()->flash('message', 'Keranjang berhasil diperbarui.');
        $this->loadKeranjang();
    }

    public function decreaseQuantity($idKeranjang)
    {
    // Cari item di keranjang berdasarkan id
        $item = $this->keranjangItems->firstWhere('id_keranjang', $idKeranjang);

        if ($item) {
        // Cek apakah jumlah lebih besar dari 1
            if ($this->jumlah[$idKeranjang] > 1) {
            // Kurangi jumlah
                $this->jumlah[$idKeranjang]--;
                $item->update(['jumlah' => $this->jumlah[$idKeranjang]]); // Update ke database
            } else {
            // Jika jumlah sudah 1, hapus item dari keranjang
                $item->delete(); // Menghapus item dari keranjang
                unset($this->jumlah[$idKeranjang]); // Hapus jumlah dari array
                unset($this->catatan[$idKeranjang]); // Hapus catatan dari array jika ada
                session()->flash('message', 'Produk berhasil dihapus dari keranjang.');
            }
        } else {
            session()->flash('error', 'Item tidak ditemukan.');
        }

        $this->loadKeranjang(); // Refresh keranjang setelah update
    }


    public function increaseQuantity($idKeranjang)
    {
    // Cari item di keranjang berdasarkan id
    error_log($idKeranjang);
        $item = $this->keranjangItems->firstWhere('id_keranjang', $idKeranjang);

        if ($item) {
            $this->jumlah[$idKeranjang]++; // Tambah jumlah
            $item->update(['jumlah' => $this->jumlah[$idKeranjang]]); // Update ke database
        } else {
            session()->flash('error', 'Item tidak ditemukan.');
        }


        $this->loadKeranjang(); // Refresh keranjang
    }

    public function checkout()
    {

        DB::beginTransaction();

        try {
            // Buat entri di tabel orders
            $order = Order::create([
                'id_user' => Auth::id(),
                'tanggal_order' => now(),
                'total_harga' => $this->totalBelanja,
                'status_order' => 'pending',
            ]);

            // Pindahkan item dari keranjang ke order_items
            foreach ($this->keranjangItems as $item) {
                OrderItem::create([
                    'id_order' => $order->id_order,
                    'id_unggas' => $item->id_unggas,
                    'jumlah_kg' => $item->jumlah,
                    'harga_total_per_item' => $item->produk->harga * $this->jumlah[$item->id_keranjang],
                    'catatan' => $item->catatan,
                ]);
            }

            // Hapus item dari keranjang setelah checkout
            Keranjang::where('id_user', Auth::id())->delete();

            DB::commit();

            session()->flash('message', 'Checkout berhasil! Pesanan Anda telah diproses.');
            return redirect()->route('payment'); // arahkan ke halaman pembayaran
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('error', 'Checkout gagal. Silakan coba lagi.');
        }
    }
    public function konfirmasiBelanja()
    {
        // Siapkan data yang akan dikirim
        $pesananItems = $this->keranjangItems->map(function ($item) {
            return [
                'id_keranjang' => $item->id_keranjang,
                'id_unggas' => $item->id_unggas,
                'jenis_unggas' => $item->unggas->jenis_unggas,
                'nama_warung' => $item->unggas->warung->nama_warung,
                'alamat_warung' => $item->unggas->warung->alamat_warung,
                'harga_per_kg' => $item->unggas->harga_per_kg,
                'jumlah' => $this->jumlah[$item->id_keranjang],
                'catatan' => isset($this->catatan[$item->id_keranjang]) ? $this->catatan[$item->id_keranjang] : '',
                'total_harga' => $item->unggas->harga_per_kg * $this->jumlah[$item->id_keranjang]
            ];
        });
        
        // Dapatkan user yang sedang login
        $user = Auth::user();
        // Ambil id_warung dari item pertama di keranjang
        $idWarung = $this->keranjangItems[0]->unggas->warung->id_warung;
        
        // Gabungkan jenis unggas dari seluruh item di keranjang
        $productNames = $this->keranjangItems->map(function ($item) {
            return $item->unggas->jenis_unggas;
        })->implode(', ');  // Gabungkan menjadi string yang dipisahkan koma
        
        // Buat order baru
        $order = Order::create([
            'id_user' => $user->id_user,
            'id_warung' => $idWarung,
            'product_name' => $productNames,  // Gunakan jenis unggas yang digabung
            'jumlah_kg' => collect($this->jumlah)->sum(), 
            'tanggal_order' => now(),
            'catatan' => $this->catatan ? implode(', ', $this->catatan) : '',
            'total_harga' => $this->totalBelanja,
            'status_order' => 'processed', 
            'foto_order' => 'uploads/fotos/chicken.png'
        ]);
        
        // Hapus item dari keranjang
        $this->keranjangItems->each(function ($item) {
            $item->delete();
        });
        
        // Simpan ke session atau database
        session(['pesanan_items' => $pesananItems]);
        session(['total_belanja' => $this->totalBelanja]);
        session(['order_id' => $order->id_order]);
        
        // Redirect ke halaman payment
        return redirect()->route('payment');
    }
    

    public function render()
    {
        return view('checkout', [
            'keranjangItems' => $this->keranjangItems,
            'totalBelanja' => $this->totalBelanja,
        ]);
        // $keranjangs = Keranjang::with('produk')->where('id_user', Auth::id())->get();
        // return view('checkout', compact('keranjangs'));
    }
    // public function render()
    // {
    //     return view('checkout');
    // }
}