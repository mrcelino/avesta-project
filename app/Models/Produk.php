<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'foto_produk',
        'info_produk', 
        'harga',
        'stok',
        'penjualan',

    ];
}