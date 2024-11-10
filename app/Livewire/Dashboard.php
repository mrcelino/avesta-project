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
    }
    public function render()
    {
        return view('dashboard');
    }
}