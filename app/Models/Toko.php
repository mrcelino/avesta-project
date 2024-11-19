<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;

    protected $table = 'warung';
    protected $primaryKey = 'id_warung';
    protected $fillable = ['nama_warung', 'alamat_warung', 'id_user', 'create_at', 'updated_at'];
}
