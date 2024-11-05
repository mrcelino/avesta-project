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
            session()->regenerate(false);
            return redirect()->intended('/dashboard'); // Redirect to dashboard after successful login.
        } else {
            session()->flash('error', 'Login gagal, email atau password salah.');
        }
    }

    public function logout()
    {
            Auth::logout();
            session()->invalidate();
            session()->regenerateToken();
            return redirect('/');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
