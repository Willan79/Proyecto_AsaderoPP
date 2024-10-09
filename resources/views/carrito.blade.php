@extends('layouts.app')

@section('titulo')
    - Menú Corriente
@endsection

@section('contenido')
    <div class="container p-4 mt-8">
        <!-- Tabla de platos -->
        <table class="min-w-full bg-white border border-gray-300">
            <thead class="bg-amber-400">
                <tr>
                    <th class="py-2 px-4 border-r border-slate-300">Foto</th>
                    <th class="py-2 px-4 border-r border-slate-300">Plato</th>
                    <th class="py-2 px-4 border-r border-slate-300">Precio</th>
                    <th class="py-2 px-4 border-r border-slate-300">Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <!-- Ejemplo de fila -->
                <tr class="border-b border-slate-300">
                    <td class="py-2 px-4 border-r border-slate-300">
                        <img src="https://via.placeholder.com/50" alt="Imagen Plato" class="w-12 h-12 object-cover">
                    </td>
                    <td class="py-2 px-4 border-r border-slate-300 ">Pollo Asado</td>
                    <td class="py-2 px-4 border-r border-slate-300 ">$15.00</td>
                    <td class="py-2 px-4 border-r border-slate-300 ">2</td>
                </tr>
                <!-- Añadir más filas aquí -->
                <tr class="border-b border-slate-300">
                    <td class="py-2 px-4 border-r border-slate-300">
                        <img src="https://via.placeholder.com/50" alt="Imagen Plato" class="w-12 h-12 object-cover">
                    </td>
                    <td class="py-2 px-4 border-r border-slate-300 ">Pollo Asado</td>
                    <td class="py-2 px-4 border-r border-slate-300 ">$15.00</td>
                    <td class="py-2 px-4 border-r border-slate-300 ">2</td>
                </tr>
            </tbody>
        </table>

        <!-- Campo del total -->
        <div class="flex justify-end mt-4">
            <div class="text-right bg-white p-2 rounded-md">
                <p class="font-bold text-xl">Subtotal: $30.000.00</p>
            </div>
        </div>
        <div class="flex justify-end mt-4">
            <div class="text-right bg-white p-2 rounded-md">
                <p class="font-bold text-xl">Total: $60.000.00</p>
            </div>
        </div>
        <div class="flex justify-end mt-4">
            <div class="text-right bg-blue-700 p-2 rounded-md">
                <p class="font-bold text-xl">Metodo de pago</p>
            </div>
        </div>
    </div>
@endsection
