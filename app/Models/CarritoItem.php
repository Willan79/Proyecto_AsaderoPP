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

    // Relación con el carrito (un item pertenece a un carrito)
    public function carrito()
    {
        return $this->belongsTo(Carrito::class);
    }

    public function plato()
    {
        return $this->belongsTo(Plato::class);
    }
}
