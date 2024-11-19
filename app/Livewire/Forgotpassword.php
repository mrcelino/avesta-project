<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\ResetPasswordUser;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class Forgotpassword extends Component
{
    public $email;

    public function submit()
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $this->email)->first();
        
        if (!$user) {
            session()->flash('error', 'Email tidak ditemukan.');
            return;
        }

        $token = rand(100000, 999999); // 6 digit
        $expiry = Carbon::now()->addMinutes(30);

        ResetPasswordUser::updateOrCreate(
            ['id_user' => $user->id_user],
            ['token' => $token, 'tanggal_kadaluarsa' => $expiry, 'is_used' => false]
        );

        Mail::to($this->email)->send(new \App\Mail\SendResetTokenMail($token));

        session()->flash('message', 'Token verifikasi telah dikirim.');
        return redirect()->route('verification');
    }
    public function render()
    {
        return view('forgotpassword');
    }
}