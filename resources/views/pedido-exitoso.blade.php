@extends('layouts.app')

@section('titulo')
    - Menú
@endsection

@section('contenido')
    <div class="max-w-lg mx-auto p-8 bg-white rounded-lg shadow-lg text-center">
        <h2 class="text-2xl font-bold text-green-600 mb-4">Pedido Confirmado</h2>

        <div class="bg-green-100 border border-green-400 text-green-700 p-4 rounded">
            <p>Tu pedido ha sido confirmado con éxito. Gracias por tu compra.</p>
        </div>

        <a href="{{ route('menu') }}"
            class="mt-6 inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md transition-colors">
            Volver al inicio
        </a>
    </div>
@endsection
