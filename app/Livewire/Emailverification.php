<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ResetPasswordUser;
use Carbon\Carbon;

class Emailverification extends Component
{
    
    public $token_1, $token_2, $token_3, $token_4, $token_5, $token_6;

    public function submit()
    {
        $token = $this->token_1 . $this->token_2 . $this->token_3 . $this->token_4 . $this->token_5 . $this->token_6;
      
        $this->validate([
            'token_1' => 'required|numeric|digits:1',
            'token_2' => 'required|numeric|digits:1',
            'token_3' => 'required|numeric|digits:1',
            'token_4' => 'required|numeric|digits:1',
            'token_5' => 'required|numeric|digits:1',
            'token_6' => 'required|numeric|digits:1',
        ]);

        $resetPassword = ResetPasswordUser::where('token', $token)
            ->where('is_used', false)
            ->where('tanggal_kadaluarsa', '>', Carbon::now())
            ->first();
       

        if (!$resetPassword) {
            session()->flash('error', 'Token salah atau sudah kadaluarsa.');
            return;
        }

        $resetPassword->update(['is_used' => true]);

        session()->flash('message', 'Token valid. Silakan reset password Anda.');
        return redirect()->route('resetpassword');
    }
    public function render()
    {
        return view('emailverification');
    }
}