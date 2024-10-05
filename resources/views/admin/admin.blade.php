@extends('layouts.app-admin')

<!-- Panel administrativo -->

@section('contenido')
    <!-- 1 -->
    <div class="w-8/12 flex flex-col justify-center md:m-2">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full">
            <div class="bg-blue-500 p-6 w-full flex justify-center">
                <a href="{{ route('tabla-platos') }}">Platos</a>
            </div>
            <div class="bg-green-500 p-6 w-full flex justify-center">
                <a href="{{ route('tabla-pedidos') }}">Pedidos</a>
            </div>
            <div class="bg-red-500 p-6 w-full flex justify-center">
                <a href="{{ route('tabla-user') }}">Usuarios</a>
            </div>
        </div>

        <img class="w-full object-contain mt-10" src="{{ asset('img/img.panel.png') }}" alt="Alternativa img">
    </div>
@endsection
