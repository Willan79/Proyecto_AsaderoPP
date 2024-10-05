@extends('layouts.app')

@section('titulo')
Editar el plato
@endsection

@section('contenido')

<div class="container mx-auto p-4 w-5/12">
    <p class="font-bold text-2xl text-amber-400">Editar Plato</p>
    <form action="{{ route('platos.update', $plato->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT') <!-- Método para actualizar -->

        <!-- Categoría -->
        <div class="mb-4">
          <label for="categoria" class="block text-gray-700 font-semibold mb-2">Categoría</label>
          <select id="categoria" name="categoria" class="w-full p-2 border border-gray-300 rounded">
            <option value="corrente" {{ $plato->categoria == 'corriente' ? 'selected' : '' }}>Corriente</option>
            <option value="ejecutivo" {{ $plato->categoria == 'ejecutivo' ? 'selected' : '' }}>Ejecutivo</option>
            <option value="especial" {{ $plato->categoria == 'especial' ? 'selected' : '' }}>Especial</option>
          </select>
        </div>

        <!-- Nombre del Plato -->
        <div class="mb-4">
          <label for="nombre" class="block text-gray-700 font-semibold mb-2">Nombre del Plato</label>
          <input type="text" id="nombre" name="nombre" class="w-full p-2 border border-gray-300 rounded" value="{{ $plato->nombre }}">
        </div>

        <!-- Descripción -->
        <div class="mb-4">
          <label for="descripcion" class="block text-gray-700 font-semibold mb-2">Descripción</label>
          <textarea id="descripcion" name="descripcion" class="w-full p-2 border border-gray-300 rounded" rows="4">{{ $plato->descripcion }}</textarea>
        </div>

        <!-- Precio -->
        <div class="mb-4">
          <label for="precio" class="block text-gray-700 font-semibold mb-2">Precio</label>
          <input type="number" id="precio" name="precio" class="w-full p-2 border border-gray-300 rounded" value="{{ $plato->precio }}" step="0.01">
        </div>

        <!-- Imagen -->
        <div class="mb-4">
          <label for="imagen" class="block text-gray-700 font-semibold mb-2">Imagen</label>
          @if($plato->imagen)
            <img src="{{ asset('storage/' . $plato->imagen) }}" alt="{{ $plato->nombre }}" class="w-32 h-32 mb-4">
          @endif
          <input type="file" id="imagen" name="imagen" class="w-full p-2 border border-gray-300 rounded">
        </div>

        <!-- Cantidad Disponible -->
        <div class="mb-4">
          <label for="cantidad" class="block text-gray-700 font-semibold mb-2">Cantidad Disponible</label>
          <input type="number" id="cantidad" name="cantidad" class="w-full p-2 border border-gray-300 rounded" value="{{ $plato->cantidad }}" min="1">
        </div>

        <!-- Botón de Enviar -->
        <div class="flex justify-end">
          <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700">Actualizar</button>
        </div>
      </form>
</div>
@endsection
