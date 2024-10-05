@extends('layouts.app')

@section('titulo')
    - Menú
@endsection

@section('contenido')
    <p class="text-3xl font-bold text-amber-500 flex justify-center">Categorías</p>
    <div class="flex justify-center w-full">
        <div class="flex flex-col gap-12 md:flex-row justify-center w-full pb-20 pt-4">
            <!-- Primer elemento -->
            <div class="bg-white flex flex-col justify-center w-full md:w-1/3 gap-4 rounded-lg p-4 m-4">
                <img class="w-full h-auto object-contain" src="{{ asset('img/Pollo.png') }}" alt="Alternativa img">
                <div class="flex flex-col justify-center text-center">
                    <a href="">
                        <input type="submit" value="Corriente"
                            class="text-amber-600 font-bold text-xl hover:bg-amber-400 p-2 rounded-lg hover:text-black cursor-pointer"></input>
                    </a>
                    <p class="p-4"> Estos platos reflejan la esencia auténtica de la cocina llanera, con sabores tradicionales
                        que satisfacen los antojos más arraigados.</p>
                </div>
            </div>

            <!-- Segundo elemento -->
            <div class="bg-white flex flex-col justify-center w-full md:w-1/3 gap-4 rounded-lg p-4 m-4">
                <img class="w-full h-auto object-contain" src="{{ asset('img/polloB.png') }}" alt="Alternativa img">
                <div class="flex flex-col justify-center text-center">
                    <a href="">
                        <input type="submit" value="Ejecutivo"
                            class="text-amber-600 font-bold text-xl hover:bg-amber-400 p-2 rounded-lg hover:text-black cursor-pointer"></input>
                    </a>
                    <p class="p-4">Pija pariente eleva la experiencia con cortes selectos de carne, preparados con técnicas
                        tradicionales.</p>
                </div>
            </div>

            <!-- Tercer elemento -->
            <div class="bg-white flex flex-col justify-center w-full md:w-1/3 gap-4 rounded-lg p-4 m-4">
                <img class="w-full h-auto object-contain" src="{{ asset('img/lomo.png') }}" alt="Alternativa img">
                <div class="flex flex-col justify-center text-center">
                    <a href="">
                        <input type="submit" value="Especial"
                            class="text-amber-600 font-bold text-xl hover:bg-amber-400 p-2 rounded-lg hover:text-black cursor-pointer"></input>
                    </a>
                    <p class="p-4"> Estos platos están diseñados para aquellos que buscan una experiencia culinaria única y memorable en el contexto del asado llanero.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
