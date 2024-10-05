@extends('layouts.app')

@section('titulo')
- Inicio
@endsection

@section('contenido')
    <div class="container  mx-auto flex flex-col items-center justify-center" style="min-height: calc(100vh - 64px);">
        <div class="flex justify-center items-center gap-20 p-10 m-4">

            <h2 class="text-center mb-10 text-3xl font-bold bg-white bg-opacity-30 p-4 rounded-lg">Asadero Pija Pariente</h2>

        </div>
        <div class="mb-10 font-medium">
            <p class="text-2xl text-center bg-white bg-opacity-30 p-4 rounded-lg m-4">En asadero pija pariente disfrutas de deliciosos platos de la gastronomía llanera</p>
        </div>
        <div class="flex flex-col gap-6">
            <input type="submit" value="Ir al MENÚ"
                class="bg-amber-500 hover:bg-amber-400 transition-colors cursor-pointer font-bold p-2 rounded-lg"></input>

            <input type="submit" value="Ir a SERVICIOS"
                class="bg-amber-500 hover:bg-amber-400 transition-colors cursor-pointer font-bold p-2 rounded-lg"></input>
        </div>
    </div>
@endsection
