<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User; 
use Illuminate\Validation\ValidationException;

class Loginkaryawan extends Component
{
    public $password;
    public $password_confirmation;

    public function render()
    {
        return view('loginkaryawan');
    }

    public function authenticate()
    {
        // Periksa apakah pengguna terautentikasi
        if (!Auth::check()) { 
            throw ValidationException::withMessages(['password' => 'Anda harus login untuk memperbarui password.']);
        }

        $this->validate([
            'password' => 'required|string|min:8|confirmed', 
        ]);

        $userId = Auth::id(); 

        // Temukan pengguna dan perbarui password
        $user = User::find($userId);
        if ($user) {
            $user->password = Hash::make($this->password);
            $user->save();

            session()->flash('message', 'Password berhasil diperbarui.');
            return redirect()->to('karyawan'); 
        } else {
            throw ValidationException::withMessages(['password' => 'Pengguna tidak ditemukan.']);
        }
    }
}