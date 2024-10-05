<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlatosController extends Controller
{

    public function index()
    {
        return view('admin.nuevoplato');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'categoria' => 'required|string|max:255',
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|string',
            'imagen' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'cantidad' => 'required|integer|min:1',
        ]);

        // Manejar la subida de la imagen
        $imagePath = null;
        if ($request->hasFile('imagen')) {
            $imagePath = $request->file('imagen')->store('imagenes_platos', 'public');
        }

        // Guardar los datos en la base de datos
        Plato::create([
            'categoria' => $request->categoria,
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'imagen' => $imagePath, // Guardar la ruta de la imagen
            'cantidad' => $request->cantidad,
        ]);

        // Redirigir a una página o mostrar un mensaje de éxito
        return redirect()->back()->with('success', 'El plato ha sido creado con éxito');

    }

    
}


