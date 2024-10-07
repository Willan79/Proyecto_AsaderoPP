<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use Illuminate\Http\Request;

class MenuespecialController extends Controller
{
    public function index()
    {
        // Obtener solo los platos de la categoría 'Corriente'
        $platos = Plato::where('categoria', 'especial')->get();

        // Pasar los datos a la vista
        return view('menu-especial', compact('platos'));
    }
}
