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
        $user = User::where('email', $this->email)->first();
        
        if (!$user) {
            session()->flash('error', 'Email tidak ditemukan.');
            return;
        }

        $token = rand(100000, 999999); // 6 digit
        $expiry = Carbon::now()->addMinutes(30);

        ResetPasswordUser::updateOrCreate(
            ['user_id' => $user->id_user],
            ['token' => $token, 'tanggal_kadaluarsa' => $expiry, 'is_used' => false]
        );

        // Mail::to($this->email)->send(new \App\Mail\ForgotPasswordMail($token));

        session()->flash('message', 'Token verifikasi telah dikirim.');
    }
    public function render()
    {
        return view('forgotpassword');
    }
}