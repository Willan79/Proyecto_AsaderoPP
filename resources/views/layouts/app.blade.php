<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Asaderopp @yield('titulo')</title>
    <style>
        .imagen {
            background-image: url("{{ asset('img/fondo-2.jpg') }}");
        }
    </style>

    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

</head>

<body class="bg-slate-800 overflow-x-auto w-full">
    <div class="imagen bg-cover bg-center bg-opacity-50 relative min-w-screen">
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
        <header class="p-5 boerder-b bg-amber-500 fixed top-0 left-0 w-full z-50">
            <div class="container mx-auto flex justify-between">
                <div class="flex gap-4 items-center">
                    <img class="w-15 h-auto object-contain p-1" src="{{ asset('img/LG-032.png') }}"
                        alt="Alternativa img">
                </div>
                <!--Autenticado-->
                @auth
                    <nav class="flex gap-4 items-center font-bold">

                        <a>
                            <span class="text-sky-800"> Hola: {{ auth()->user()->name }}</span>
                        </a>
                        <!-- Carrito de compras-->
                        <!-- Sí existen elementos se muestra el carrito -->
                        @if (Cart::content()->count())
                            <a href="" class="text-black">
                                <div class="cart-icon">
                                    <svg class="h-8 w-8 text-red-500" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="9" cy="21" r="1" />
                                        <circle cx="20" cy="21" r="1" />
                                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
                                    </svg>
                                    <!-- Sí existen elementos se muestra el numeo -->
                                    <span class="badge">{{ Cart::content()->count() }}</span>
                                </div>
                            </a>
                        @endif

                        <a href="/">Inicio</a>
                        <a href="{{ route('menu') }}">Menú</a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">
                                Cerrar sesión
                            </button>
                        </form>

                    </nav>
                @endauth

                <!--No autenticado-->
                @guest
                    <nav class="flex gap-4 items-center font-bold">
                        <a href="/">Inicio</a>
                        <a href="{{ route('menu') }}">Menú</a>
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Registrarte</a>
                    </nav>
                @endguest

            </div>
        </header>

        <main class="relative container mx-auto mt-10">
            <h2 class=" text-center mb-10 text-3xl font-bold">@yield('titulo')</h2>
            @yield('contenido')
        </main>

        <footer class=" relative text-center p-5 text-gray-500 mt-10 bg-slate-800 w-full">
            Asadero Pija Pariente todos los derechos reservados {{ now()->year }}
        </footer>
    </div>

</body>

</html>
