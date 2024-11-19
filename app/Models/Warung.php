<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warung extends Model
{
    use HasFactory;

    protected $table = 'warung'; 
    protected $primaryKey = 'id_warung';
    protected $fillable = ['nama_warung']; 

    
    public function unggas()
    {
        return $this->hasMany(Unggas::class, 'id_warung', 'id_warung'); 
    }
}
