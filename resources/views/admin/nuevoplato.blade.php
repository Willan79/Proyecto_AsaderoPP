@extends('layouts.app')

@section('titulo')
    Crea un nuevo plato
@endsection

@section('contenido')
    <div class="container mx-auto p-4 w-5/12">
        <p class="font-bold text-2xl text-amber-400">Nuevo Plato</p>
        <form class="bg-white p-6 rounded-lg shadow-md" action="{{ route('nuevoplato') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Categoría -->
            <div class="mb-4">
                <label for="categoria" class="block text-gray-700 font-semibold mb-2">Categoría</label>
                <select id="categoria" name="categoria" class="w-full p-2 border border-gray-300 rounded">
                    <option value="1">Selecciona una categoría</option>
                    <option value="Corriente">Corriente</option>
                    <option value="ejecutivo">Ejecutivo</option>
                    <option value="especial">Especial</option>
                </select>
            </div>

            <!-- Nombre del Plato -->
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-semibold mb-2">Nombre del Plato</label>
                <input type="text" id="nombre" name="nombre"
                    class="w-full p-2 border border-gray-300 rounded focus:border-blue-500 focus:outline-none"
                    placeholder="Escribe el nombre del plato">
            </div>

            <!-- Descripción -->
            <div class="mb-4">
                <label for="descripcion"  class="block text-gray-700 font-semibold mb-2">Descripción</label>
                <textarea id="descripcion" name="descripcion" class="w-full p-2 border border-gray-300 rounded focus:border-blue-500 focus:outline-none"
                    rows="2" placeholder="Escribe una breve descripción del plato"></textarea>
            </div>

            <div class="mb-4">
                <label for="precio" class="block text-gray-700 font-semibold mb-2">precio del Plato</label>
                <input type="number" id="precio" name="precio"
                    class="w-full p-2 border border-gray-300 rounded focus:border-blue-500 focus:outline-none"
                    placeholder="Precio del plato">
            </div>

            <!-- Imagen -->
            <div class="mb-4">
                <label for="imagen" class="block text-gray-700 font-semibold mb-2 ">Imagen</label>
                <input type="file" id="imagen" name="imagen"
                    class="w-full p-2 border border-gray-300 rounded focus:border-blue-500 focus:outline-none">
            </div>

            <!-- Cantidad Disponible -->
            <div class="mb-4">
                <label for="cantidad" class="block text-gray-700 font-semibold mb-2">Cantidad Disponible</label>
                <input type="number" id="cantidad" name="cantidad"
                    class="w-full p-2 border border-gray-300 rounded focus:border-blue-500 focus:outline-none"
                    placeholder="Ingresa la cantidad disponible" min="1">
            </div>

            <!-- Botón de Enviar -->
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700">Guardar</button>
            </div>
        </form>
    </div>
@endsection
