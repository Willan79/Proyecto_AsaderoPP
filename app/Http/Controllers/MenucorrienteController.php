<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use Illuminate\Http\Request;

class MenucorrienteController extends Controller
{
    public function index()
    {
        // Obtener solo los platos de la categoría 'Corriente'
        $platos = Plato::where('categoria', 'Corriente')->get();

        // Pasar los datos a la vista
        return view('menu-corriente', compact('platos'));
    }
}
