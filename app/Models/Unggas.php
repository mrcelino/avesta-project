<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unggas extends Model
{
    use HasFactory;

    protected $table = 'unggas';
    protected $primaryKey = 'id_unggas';
    protected $fillable = ['id_warung', 'jenis_unggas', 'harga_per_kg', 'stok', 'penjualan', 'deskripsi', 'foto_unggas'];

    public function warung()
    {
        return $this->belongsTo(Warung::class, 'id_warung', 'id_warung');
    }
    
}