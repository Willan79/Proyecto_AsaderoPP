@extends('layouts.app')

@section('titulo')
Registro de Usuario
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:items-center ">

    <div class="md:w-4/12 ms:w-6/12 lg:w-4/12 bg-white p-4 shadow-xl rounded-lg ">
        <form action="{{ route('register') }}" method="POST">
            @csrf <!--Token de seguridad  -->
            <div class="mb-3">
              <label for="name" class="text-gray-500">Nombre</label>
              <input type="text" class="rounded-md w-full border-2 border-gray-300 focus:border-blue-500 focus:outline-none" id="name" name="name"
              placeholder="Nombre"
              value="{{ old('name') }}"
              />
              @error('name')
               <p class="bg-red-500 text-white my-2 rounded-lg tesxt-sm text-center">{{ $message }}</p>
              @enderror
            </div>

            <div class="mb-3">
                <label for="apellido" class="text-gray-500">Apellido</label>
                <input type="text" class="rounded-md border-2 border-gray-300 focus:border-blue-500 focus:outline-none  w-full" id="apellido" name="apellido"
                placeholder="apellido"
                value="{{ old('apellido') }}"
                />
                @error('apellido')
                  <p class="bg-red-500 text-white my-2 rounded-lg tesxt-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="text-gray-500">Email</label>
                <input type="email" class="rounded-md border-2 border-gray-300 focus:border-blue-500 focus:outline-none w-full" id="email" name="email"
                placeholder="Email"
                value="{{ old('email') }}"
                />
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg tesxt-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="direccion" class="text-gray-500">Direccion</label>
                <input type="text" class="rounded-md border-2 border-gray-300 focus:border-blue-500 focus:outline-none w-full" id="direccion" name="direccion"
                placeholder="Direccion"
                value="{{ old('direccion') }}"
                />
                @error('direccion')
                    <p class="bg-red-500 text-white my-2 rounded-lg tesxt-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="telefono" class="text-gray-500">Telefono</label>
                <input type="text" class="rounded-md border-2 border-gray-300 focus:border-blue-500 focus:outline-none w-full" id="telefono" name="telefono"
                placeholder="telefono"
                value="{{ old('telefono') }}"
                />
                @error('telefono')
                    <p class="bg-red-500 text-white my-2 rounded-lg tesxt-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="text-gray-500">Contraseña</label>
                <input type="password"
                class="rounded-md border-2 border-gray-300 focus:border-blue-500 focus:outline-none w-full"  id="password"
                name="password"
                placeholder="Contraseña"

               />
                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg tesxt-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="text-gray-500">Confirmar contraseña</label>
                <input type="password" class="rounded-md border-2 border-gray-300 focus:border-blue-500 focus:outline-none w-full" id="password_confirmation" name="password_confirmation"
                placeholder="Confirmar Contraseña"

                />
            </div>

            <input
            type="submit"
            value="Crear Cuenta"
            class="bg-blue-500 hover:bg-blue-700 transition-colors cursor-pointer font-bold w-full p-2 rounded-lg"
            ></input>
        </form>
    </div>
</div>
@endsection
