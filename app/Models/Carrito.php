<?php

namespace App\Models;

use App\Models\CarritoItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Carrito extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
    ];

    public function items()
    {
        return $this->hasMany(CarritoItem::class);
    }
}
