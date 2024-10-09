<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TablauserController extends Controller
{

    public function index()
    {
        // Obtener todos los usuarios de la base de datos
        $usuarios = User::all();

        // Pasar los datos de los usuarios a la vista
        return view('admin.tabla-user', compact('usuarios'));
    }
}
