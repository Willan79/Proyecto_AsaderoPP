<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Asaderopp - @yield('titulo')</title>
    <script>
        function confirmDelete() {
            return confirm('¿Estás seguro de que deseas eliminar este plato?');
        }
    </script>
</head>

<body class="bg-amber-100">
    <div>
        <header class="p-4 boerder-b bg-amber-500 fixed top-0 left-0 w-full z-50">
            <h2 class=" text-center text-3xl font-bold">Panel administrativo @yield('titulo')</h2>
        </header>

        <div class="min-h-screen flex gap-4">
            <!-- Barra lateral -->
            <nav class="w-2/12 bg-gray-800 text-white p-1 ms:w-3/12">
                <ul class="mt-20">
                    <li class="mb-2"><a href="/" class="hover:text-gray-400">Inicio</a></li>
                    <li class="mb-2"><a href="{{ route('admin.index') }}" class="hover:text-gray-400">Panel</a></li>
                    <li class="mb-2"><a href="{{ route('tabla-platos') }}" class="hover:text-gray-400">Platos</a></li>
                    <li class="mb-2"><a href="{{ route('tabla-pedidos') }}" class="hover:text-gray-400">Pedidos</a></li>
                    <li class="mb-2"><a href="{{ route('tabla-user') }}" class="hover:text-gray-400">Usuarios</a></li>
                    <li class="mb-2">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </nav>

            <!-- Contenido principal -->
            @yield('contenido')

        </div>


    </div>

</body>

</html>
