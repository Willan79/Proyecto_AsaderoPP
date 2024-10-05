@extends('layouts.app-admin')

@section('titulo')
- Pedidos
@endsection

@section('contenido')
    <!-- Contenido principal -->
    <div class="container mx-auto p-4 mt-20">
        <table class="min-w-full bg-white border border-gray-300">
          <thead class="bg-amber-400">
            <tr>
              <th class="py-2 px-4 border-b">Código</th>
              <th class="py-2 px-4 border-b">Cliente</th>
              <th class="py-2 px-4 border-b">Fecha Pedido</th>
              <th class="py-2 px-4 border-b">Estado</th>
              <th class="py-2 px-4 border-b">Platos</th>
              <th class="py-2 px-4 border-b">Acción</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="py-2 px-4 border-b">1001</td>
              <td class="py-2 px-4 border-b">Carlos López</td>
              <td class="py-2 px-4 border-b">2024-10-01</td>
              <td class="py-2 px-4 border-b">Pendiente</td>
              <td class="py-2 px-4 border-b">
                - Hamburguesa <br>
                - Papas fritas <br>
                - Coca-Cola
              </td>
              <td class="py-2 px-4 border-b">
                <button class="bg-blue-500 text-white py-1 px-2 rounded hover:bg-blue-700">Editar</button>
                <button class="bg-red-500 text-white py-1 px-2 rounded hover:bg-red-700">Eliminar</button>
              </td>
            </tr>

          </tbody>
        </table>
      </div>

@endsection
