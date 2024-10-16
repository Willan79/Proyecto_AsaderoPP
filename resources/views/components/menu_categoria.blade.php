<div class="flex flex-col justify-center w-full mt-20">

    @if (session('success'))
        <div class="bg-green-500 text-white p-2 rounded
         m-4 flex flex-col items-center "
         >
            {{ session('success') }}
        </div>
    @endif

    <div class="flex flex-col gap-12 md:flex-row justify-center w-full pb-20 pt-4">

        @foreach ($platos as $plato)
            <!-- Cada Plato -->
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

                        <form action="{{ route('carrito.add') }}" method="POST" class="">
                            @csrf
                            <input type="hidden" name="plato_id" value="{{ $plato->id }}">
                            <input type="hidden" name="cantidad" value="1"> <!-- Valor por defecto -->
                            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Agregar</button>
                        </form>

                        <!-- Boton modal detalles del plato -->
                        <button onclick="openModal({{ $plato->id }})"
                            class="bg-blue-500 text-white px-2 rounded hover:bg-blue-700 ml-4">
                            Ver detalles
                        </button>
                    </div>
                </div>
            </div>
            <!-- Modal detalles del plato -->
            @include('components.modal_detalles')
        @endforeach
    </div>
</div>
