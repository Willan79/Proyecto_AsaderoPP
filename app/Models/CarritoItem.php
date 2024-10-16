<?php

namespace App\Models;

use App\Models\Plato;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarritoItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'carrito_id',
        'plato_id',
        'cantidad',
        'precio',
    ];

    public function plato()
    {
        return $this->belongsTo(Plato::class);
    }
}
