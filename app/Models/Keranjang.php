<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;
    protected $table = 'keranjang';
    protected $primaryKey = 'id_keranjang'; 
    
    protected $fillable = [
        'id_user', 'id_unggas', 'jumlah', 'catatan'
    ];

    public function unggas()
    {
        return $this->belongsTo(Unggas::class,'id_unggas', 'id_unggas');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}
