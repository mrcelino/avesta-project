<?php

namespace App\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Login extends Component
{
    public $email;
    public $password;

    public function authenticate()
    {
        $this->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        $credentials = ['email' => $this->email, 'password' => $this->password];

        if (Auth::attempt($credentials)) {
            session()->regenerate();
            return redirect()->intended('/dashboard');
        } else {
            session()->flash('error', 'Login gagal, email atau password salah.');
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}