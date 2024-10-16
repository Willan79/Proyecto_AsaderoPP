<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablapedidosController extends Controller
{
    public function index()
    {
        return view('admin.tabla-pedidos');
    }

    
}
