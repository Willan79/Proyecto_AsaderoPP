<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class CarritoController extends Controller
{
    public function index()
    {
        return view('carrito');
    }
}
