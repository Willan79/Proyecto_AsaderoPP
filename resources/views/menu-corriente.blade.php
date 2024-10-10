@extends('layouts.app')

@section('titulo')
    - Menú Corriente
@endsection

@section('contenido')
    <div class="flex justify-center  mt-10">
        <div class="flex flex-col gap-4 md:flex-row justify-center w-auto pt-4">
            @foreach ($platos as $plato)

                <div class="bg-white flex flex-col items-center justify-center w-auto md:w-3/12 gap-4 rounded-lg p-4 m-4">
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

                            <button onclick="openModal({{ $plato->id }})"
                                class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-700 ml-4">
                                Ver detalles
                            </button>
                            

                        </div>
                    </div>
                </div>
                <!-- Modal oculto -->
                @include('layouts.modal_detalles')
            @endforeach
        </div>
    </div>
@endsection
