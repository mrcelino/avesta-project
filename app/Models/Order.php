<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user', 'tanggal_order', 'total_harga', 'status_order'
    ];
        // Accessor untuk is_completed
    public function getIsCompletedAttribute()
    {
        return $this->status_order === 'completed';
    }

    // Mutator untuk is_completed
    public function setIsCompletedAttribute($value)
    {
        $this->attributes['status_order'] = $value ? 'completed' : 'processed';
    }
    protected $casts = [
        'status_order' => 'string',
    ];
    protected $primaryKey = 'id_order';

    // Jika primary key bukan auto-increment, tambahkan ini
    public $incrementing = true;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}