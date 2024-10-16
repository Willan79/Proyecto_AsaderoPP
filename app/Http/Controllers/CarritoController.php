<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use App\Models\Carrito;
use App\Models\CarritoItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    // Mostrar el carrito del usuario actual
    
    public function index()
    {
        $carrito = Carrito::where('user_id', Auth::id())->with('items.plato')->first();
        return view('carrito', compact('carrito'));
    }

    // Agregar un plato al carrito
    public function addCarrito(Request $request)
    {
        // Obtener el plato
        $plato = Plato::findOrFail($request->plato_id);

        // Buscar o crear un carrito para el usuario
        $carrito = Carrito::firstOrCreate([
            'user_id' => Auth::id(),
        ]);

        // Agregar o actualizar el plato en el carrito
        $carritoItem = CarritoItem::updateOrCreate(
            ['carrito_id' => $carrito->id, 'plato_id' => $plato->id],
            ['cantidad' => $request->cantidad, 'precio' => $plato->precio]
        );
        return redirect()->back()->with('success', 'Plato agregado al carrito, visita tu carrito');

    }

    public function removeFromCarrito($itemId)
    {
        // Buscar el item del carrito y eliminarlo
        $carritoItem = CarritoItem::findOrFail($itemId);
        $carritoItem->delete();
        return redirect()->back()->with('success', 'Plato eliminado del carrito');
    }

    public function updateCantidad(Request $request, $itemId)
    {
        $carritoItem = CarritoItem::findOrFail($itemId);
        $carritoItem->cantidad = $request->cantidad;
        $carritoItem->save();
        return redirect()->back()->with('success', 'Cantidad actualizada');

    }

    public function closeCarrito()
    {
        $carrito = Carrito::where('user_id', Auth::id())->first();

        if ($carrito) {
            $carrito->items()->delete(); // Elimina todos los items del carrito
            $carrito->delete(); // Elimina el carrito
        }
        return redirect()->back()->with('success', 'Carrito cerrado');
        //return back()->with('success', 'Carrito cerrado');
    }
}
