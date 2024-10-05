@extends('layouts.app')

@section('contenido')

    <!-- <div class=" flex flex-col justify-center items-center"> -->

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full">

        <div class="bg-white rounded-lg shadow-md p-4">
            <!-- Imagen -->
            <img src="{{ asset('img/') }}" alt="Producto" class="w-full h-48 object-cover mb-4 rounded-lg">

            <!-- Nombre y Precio -->
            <h2 class="text-xl font-semibold mb-2">Nombre del Producto</h2>
            <p class="text-gray-700 text-lg mb-4">$25.00</p>

            <!-- Botones -->
            <div class="flex justify-between">
                <button class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-700">Agregar</button>
                <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700">Detalles</button>
            </div>
        </div>

    </div>
@endsection
