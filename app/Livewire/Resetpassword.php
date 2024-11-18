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
    public $password;
    public $password_confirmation;

    public function resetPassword()
    {
        
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::where('email', $this->email)->first();
        
        if (!$user) {
            session()->flash('error', 'Email tidak ditemukan.');
            return;
        }
        
        $resetRequest = ResetPasswordUser::where('id_user', $user->id_user)
            ->where('is_used', true)
            ->where('tanggal_kadaluarsa', '>', Carbon::now())
            ->first();
        
        
        if (!$resetRequest) {
            session()->flash('error', 'Token tidak valid atau sudah kedaluwarsa.');
            return redirect()->route('verification');
        }

        // $this->validate([
        //     'password' => 'required|min:8|confirmed',
        // ]);
        
        $user->update(['password' => Hash::make($this->password)]);

        $resetRequest->delete();

        session()->flash('message', 'Password berhasil diubah.');
        return redirect()->route('login');
    }
    public function render()
    {
        return view('resetpassword');
    }
}