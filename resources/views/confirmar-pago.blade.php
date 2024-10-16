@extends('layouts.app')

@section('titulo')
    - pagos
@endsection

@section('contenido')
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-lg mx-auto flex flex-col justify-center gap-6">
        <h2 class="text-2xl font-bold text-green-600 text-center">Confirmar Pago</h2>

        <div class="bg-blue-100 border border-blue-400 text-blue-700 p-4 rounded">
            <p class="text-xl">Total a pagar: <strong>${{ number_format($total, 2) }}</strong></p>
        </div>

        <form action="{{ route('procesar.pedido') }}" method="POST" class="flex flex-col gap-4">
            @csrf
            <div class="mb-4">
                <label for="metodo_pago" class="block text-sm font-medium text-gray-700">Selecciona el método de pago:</label>
                <select name="metodo_pago" id="metodo_pago"
                    class="w-full mt-1 block bg-gray-50 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    required>
                    <option value="efectivo">Efectivo (contra entrega)</option>
                    <option value="nequi">Nequi</option>
                </select>
            </div>

            <button type="submit"
                class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-md transition-colors">
                Confirmar Pedido
            </button>
        </form>

        @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 p-4 rounded mt-4">
                {{ session('error') }}
            </div>
        @endif
    </div>
@endsection
