<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    public $primaryKey = 'id_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'email',
        'alamat',
        'foto',
        'jenis_kelamin',
        'bank',
        'tanggal_lahir',
        'nomor_rekening',
        'no_telepon',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function fotoUsers()
    {
        return $this->hasMany(FotoUser::class, 'id_user', 'id_user');
    }

    public function canAccessPanel(Panel $panel): bool
    {
        // Untuk panel admin
        if ($panel->getId() === 'admin') {
            return $this->role === 'pemilik';
        }
        
        // Untuk panel karyawan
        if ($panel->getId() === 'karyawan') {
            return $this->role === 'karyawan';
        }
        
        // Tambahkan logika default jika diperlukan
        return false;
    }

    /**
     * Handle default values for role and password.
     */
    protected static function booted()
    {
        static::creating(function ($user) {
            // Set default role to 'karyawan' if not provided
            if (empty($user->role)) {
                $user->role = 'karyawan';
            }

            // Set default password to '123' (hashed) if not provided
            if (empty($user->password)) {
                $user->password = Hash::make('12345678');
            }
        });
    }
}