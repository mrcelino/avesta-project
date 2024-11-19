<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public $user;
    public $nama_depan;
    public $nama_belakang;
    public $email;
    public function mount()
    {
        $this->user = Auth::user(); // Mengambil data user yang sedang login

        $this->nama_depan = $this->user->nama_depan;
        $this->nama_belakang = $this->user->nama_belakang;
        $this->email = $this->user->email;

        // Cek role user dan pilih tampilan yang sesuai
        if ($this->user->role === 'pemilik') {
            return redirect()->route('mitra');
        }
    }
    public function render()
    {
        return view('dashboard', ['user' => $this->user]);
    }
}
