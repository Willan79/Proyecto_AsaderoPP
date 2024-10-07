@extends('layouts.app')

@section('titulo')
    - Menú Especial
@endsection

@section('contenido')
    <div class="flex justify-center w-full mt-20">
        <div class="flex flex-col gap-12 md:flex-row justify-center w-full pb-20 pt-4">
            @foreach ($platos as $plato)
                <!-- Cada Plato -->
                <div class="bg-white flex flex-col items-center justify-center w-full md:w-1/3 gap-4 rounded-lg p-4">
                    <!-- Imagen del Plato -->
                    <img class="w-full h-auto object-contain" src="{{ asset('storage/' . $plato->imagen) }}"
                        alt="{{ $plato->nombre_plato }}">

                    <!-- Información del Plato -->
                    <div class="flex flex-col justify-center text-center">
                        <h3 class="text-xl font-bold">{{ $plato->nombre_plato }}</h3>
                        <p class="text-gray-600 font-semibold">${{ number_format($plato->precio, 2) }}</p>

                        <!-- Botones -->
                        <div class="flex justify-between mt-4">
                            <!-- Botón Agregar -->
                            <a href="{ route('agregar-carrito', $plato->id) }"
                                class="bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-700">
                                Agregar
                            </a>

                            <!-- Botón Detalles -->
                            <a href="{ route('detalles-plato', $plato->id) }"
                                class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-700 ml-4">
                                Detalles
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

