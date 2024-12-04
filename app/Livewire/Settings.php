<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Settings extends Component
{
    public $user;
    public $nama_depan;
    public $nama_belakang;
    public $email;
    public $no_telepon;
    public $alamat;
    public $tanggal_lahir;
    public $jenis_kelamin;
    public $bank;
    public $no_rekening;
    public $foto_user;

    public $full_name;
    public $updateProfile;

    public function mount()
    {
        $this->user = Auth::user();

        $this->nama_depan = $this->user->nama_depan;
        $this->nama_belakang = $this->user->nama_belakang;
        $this->email = $this->user->email;
        $this->no_telepon = $this->user->no_telepon;
        $this->alamat = $this->user->alamat;
        $this->tanggal_lahir = $this->user->tanggal_lahir;
        $this->jenis_kelamin = $this->user->jenis_kelamin;
        $this->bank = $this->user->bank;
        $this->no_rekening = $this->user->no_rekening;
        $this->foto_user = $this->user->foto_user;

        $this->full_name = $this->nama_depan . ' ' . $this->nama_belakang;
    }

    protected function rules()
    {
        return [
            'nama_depan' => 'required|string|max:50',
            'nama_belakang' => 'nullable|string|max:50',
            'email' => 'required|email|unique:user,email,' . $this->user->id_user,
            'no_telepon' => 'required|numeric',
            'alamat' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'jenis_kelamin' => 'nullable|in:L,P',
            'bank' => 'nullable|string|max:50',
            'no_rekening' => 'nullable|numeric',
            'foto_user' => 'nullable|string|max:255', // Sesuaikan jika menggunakan file upload
        ];
    }

    public function updateSettings()
    {
        $this->validate();

        $this->user->update([
            'nama_depan' => $this->nama_depan,
            'nama_belakang' => $this->nama_belakang,
            'email' => $this->email,
            'no_telepon' => $this->no_telepon,
            'alamat' => $this->alamat,
            'tanggal_lahir' => $this->tanggal_lahir,
            'jenis_kelamin' => $this->jenis_kelamin,
            'bank' => $this->bank,
            'no_rekening' => $this->no_rekening,
            'foto_user' => $this->foto_user,
        ]);

        dd($this->all);

        session()->flash('success', 'Data pengguna berhasil diperbarui!');
        return redirect()->route('settings');
    }
    public function render()
    {
        return view('settings');
    }
}