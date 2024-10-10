<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use Illuminate\Http\Request;

class MenuejecutivoController extends Controller
{
    public function index()
    {
        // Obtener solo los platos de la categoría 'Corriente'
        $platos = Plato::where('categoria', 'Ejecutivo')->get();

        // Pasar los datos a la vista
        return view('menu-ejecutivo', compact('platos'));
    }
}
