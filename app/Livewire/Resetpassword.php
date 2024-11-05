<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\ResetPasswordUser;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class Resetpassword extends Component
{
    public $email;
    public $token;
    public $password;
    public $password_confirmation;

    public function resetPassword()
    {
        $user = User::where('email', $this->email)->first();
        
        if (!$user) {
            session()->flash('error', 'Email tidak ditemukan.');
            return;
        }

        $resetRequest = ResetPassword::where('user_id', $user->id_user)
            ->where('token', $this->token)
            ->where('is_used', false)
            ->where('tanggal_kadaluarsa', '>', Carbon::now())
            ->first();

        if (!$resetRequest) {
            session()->flash('error', 'Token tidak valid atau sudah kedaluwarsa.');
            return;
        }

        $this->validate([
            'password' => 'required|min:8|confirmed',
        ]);

        $user->update(['password' => Hash::make($this->password)]);

        $resetRequest->update(['is_used' => true]);

        session()->flash('message', 'Password berhasil diubah.');
        return redirect()->route('login');
    }
    public function render()
    {
        return view('resetpassword');
    }
}