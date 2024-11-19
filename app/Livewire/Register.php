<?php

namespace App\Livewire;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

use Livewire\Attributes\Layout;

class Register extends Component
{
    public $nama_depan;
    public $nama_belakang;
    public $email;
    public $no_telepon;
    public $alamat;
    public $password;
    public $password_confirmation;
    public $role; 

    public function mount($role = 'user') // Default peran adalah 'user' jika tidak diberikan
    {
        $this->role = $role;
    }
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
            'nama_depan' => $this->nama_depan,
            'nama_belakang' => $this->nama_belakang,
            'email' => $this->email,
            'no_telepon' => $this->no_telepon,
            'alamat' => $this->alamat ?? '',
            'password' => Hash::make($this->password),
            'role' => $this->role,
        ]);

        session()->flash('success', 'Registrasi berhasil, silakan login.');
        return redirect()->route('login');
    }
    

    public function render()
    {
        return view('livewire.register');
    }
}
