<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class ResetPasswordUser extends Model
{
    use HasFactory;

    protected $table = 'reset_password';
    protected $primaryKey = 'id_reset_password';

    protected $fillable = [
        'id_user',
        'token',
        'tanggal_kadaluarsa',
        'is_used',
    ];

    protected $casts = [
        'tanggal_kadaluarsa' => 'datetime',
        'is_used' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function isExpired()
    {
        return Carbon::now()->greaterThan($this->tanggal_kadaluarsa);
    }

    public function isUsed()
    {
        return $this->is_used;
    }
}
