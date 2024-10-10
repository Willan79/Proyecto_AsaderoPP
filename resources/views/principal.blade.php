@extends('layouts.app')

@section('titulo')
    - Inicio
@endsection

@section('contenido')
    <div class="container  mx-auto flex flex-col items-center justify-center" style="min-height: calc(90vh - 64px);">
        <div class="flex justify-center items-center gap-20 p-10 m-4">

            <h2 class="text-center mb-10 text-3xl font-bold bg-white bg-opacity-30 p-4 rounded-lg">Asadero Pija Pariente</h2>

        </div>
        <div class="mb-10 font-medium">
            <p class="text-2xl text-center bg-white bg-opacity-30 p-4 rounded-lg m-4">En asadero pija pariente disfrutas de
                deliciosos platos de la gastronomía llanera</p>
        </div>
        <div class="flex flex-col gap-6">
            <a href="{{ route('menu') }}">
                <input type="submit" value="Ir al MENÚ"
                    class="bg-amber-500 hover:bg-amber-400 transition-colors cursor-pointer font-bold p-2 rounded-lg">
                </input>
            </a>

            <a href="{{ route('agregarplato') }}">
                <input type="submit" value="Ir a SERVICIOS"
                    class="bg-amber-500 hover:bg-amber-400 transition-colors cursor-pointer font-bold p-2 rounded-lg">
                </input>
            </a>

            <button id="openModal" class="bg-blue-500 text-white px-4 py-2 rounded">Abrir Modal</button>
            <!-- Ventana modal -->
            <!-- Ventana modal -->
            <div id="modal" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex justify-center items-center hidden">
                <div class="bg-white rounded-lg p-6 shadow-lg w-1/2">
                    <div class="container mx-auto p-4 mt-8">
                        <!-- Tabla de platos -->
                        <table class="min-w-full bg-white border border-gray-300">
                            <thead class="bg-amber-400">
                                <tr>
                                    <th class="py-2 px-4 border-b">Foto</th>
                                    <th class="py-2 px-4 border-b">Plato</th>
                                    <th class="py-2 px-4 border-b">Precio</th>
                                    <th class="py-2 px-4 border-b">Cantidad</th>
                                    <th class="py-2 px-4 border-b">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Ejemplo de fila -->
                                <tr>
                                    <td class="py-2 px-4 border-b">
                                        <img src="https://via.placeholder.com/50" alt="Imagen Plato" class="w-12 h-12 object-cover">
                                    </td>
                                    <td class="py-2 px-4 border-b">Pollo Asado</td>
                                    <td class="py-2 px-4 border-b">$15.00</td>
                                    <td class="py-2 px-4 border-b">2</td>
                                    <td class="py-2 px-4 border-b">$30.00</td>
                                </tr>
                                <!-- Añadir más filas aquí -->
                            </tbody>
                        </table>

                        <!-- Campo del total -->
                        <div class="flex justify-end mt-4">
                            <div class="text-right">
                                <p class="font-bold text-xl">Total: $60.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <!-- Botón para cerrar el modal -->
                        <button id="closeModal" class="bg-red-500 text-white px-4 py-2 rounded">Cerrar</button>
                    </div>
                </div>
            </div>
            <script src="{{ asset('js/modal.js') }}"></script>
        </div>
    </div>
@endsection
