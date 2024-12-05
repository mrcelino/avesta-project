<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class Settings extends Component
{
    use WithFileUploads;
    public $user;
    public $nama_depan;
    public $nama_belakang;
    public $photo;
    public $photoUrl;
    public $email;
    public $no_telepon;
    public $alamat;
    public $tanggal_lahir;
    public $jenis_kelamin;
    public $bank;
    public $nomor_rekening;
    public $foto_user;

    public $full_name;

    public function mount()
    {
        $this->user = Auth::user();
        // Menampilkan foto profil saat ini atau URL default
        $this->photoUrl = $this->user->foto ? Storage::url($this->user->foto) : 'https://storage.googleapis.com/a1aa/image/W7NZvnnlfo3SbCLfaVtYE3uXBeITyA7STLDMYrTujHBcfM6OB.jpg';
        $this->nama_depan = $this->user->nama_depan;
        $this->nama_belakang = $this->user->nama_belakang;
        $this->email = $this->user->email;
        $this->no_telepon = $this->user->no_telepon;
        $this->alamat = $this->user->alamat;
        $this->tanggal_lahir = $this->user->tanggal_lahir;
        $this->jenis_kelamin = $this->user->jenis_kelamin;
        $this->bank = $this->user->bank;
        $this->nomor_rekening = $this->user->nomor_rekening;
        $this->foto_user = $this->user->foto;
        $this->full_name = $this->nama_depan . ' ' . $this->nama_belakang;
    }

    protected function rules()
    {
        return [
            'nama_depan' => 'required|string|max:50',
            'nama_belakang' => 'nullable|string|max:50',
            'email' => 'required|email|unique:users,email,' . $this->user->id_user . ',id_user',
            'no_telepon' => 'required|numeric',
            'alamat' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'jenis_kelamin' => 'nullable|in:Laki-laki,Perempuan',
            'bank' => 'nullable|string|max:50',
            'nomor_rekening' => 'nullable|numeric',
        ];
    }
    public function updatedPhoto()
    {
        // Validasi foto yang diupload
        $this->validate([
            'photo' => 'image|max:1024', // Maksimal 1MB
        ]);
    
        // Simpan foto baru ke penyimpanan
        $path = $this->photo->store('profile_photos', 'public');
    
        // Update foto di database
        $this->user->update([
            'foto' => $path,
        ]);
    
        // Update URL foto profil
        $this->photoUrl = Storage::url($path);
    
        // Simpan foto yang baru ke property foto_user
        $this->foto_user = $path;
    
        // Flash message for success
        session()->flash('success', 'Foto profil berhasil diperbarui!');
    }
    

    public function updateSettings()
    {
        $this->validate();
        Log::info('Foto User: ' . $this->foto_user);
        Log::info('Foto URL: ' . $this->photoUrl);
    
        // Pastikan menggunakan foto terbaru yang telah diupload
        $this->user->update([
            'nama_depan' => $this->nama_depan,
            'nama_belakang' => $this->nama_belakang,
            'email' => $this->email,
            'no_telepon' => $this->no_telepon,
            'alamat' => $this->alamat,
            'tanggal_lahir' => $this->tanggal_lahir,
            'jenis_kelamin' => $this->jenis_kelamin,
            'bank' => $this->bank,
            'nomor_rekening' => $this->nomor_rekening,
            // Pastikan foto terbaru disimpan di sini
            'foto' => $this->foto_user ?: $this->user->foto,  // Jika tidak ada foto baru, simpan foto lama
        ]);
        
        // Ganti emit dengan dispatch
        $this->dispatch('settings-updated');
        
        // Flash message for success
        session()->flash('success', 'Profil berhasil diperbarui!');
    }
    

    public function render()
    {
        return view('settings');
    }
}