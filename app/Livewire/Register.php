<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $nama_depan;
    public $nama_belakang;
    public $email;
    public $no_telepon;
    public $password;
    public $password_confirmation;

    public function register()
    {
        $this->validate([
            'nama_depan' => 'required|string|max:255',
            'nama_belakang' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'no_telepon' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $this->nama_depan . ' ' . $this->nama_belakang,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        session()->flash('success', 'Registrasi berhasil, silakan login.');
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.register');
    }
}
