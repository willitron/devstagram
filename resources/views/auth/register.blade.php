@extends('layouts.app')

@section('titulo')
    Registrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-7/12 ">
            <img src="{{ asset('img/registrar.jpg') }}" alt="imagen registro usuario">
        </div>

        <div class="md:w-4/12 bg-white shadow rounded-lg p-6 ">
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-800 font-bold">
                        Nombre
                    </label>
                    <input class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" type="text"
                        id="name" name="name" placeholder="Tú Nombre" value="{{ old('name') }}">
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-800 font-bold">
                        UserName
                    </label>
                    <input class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror" type="text"
                        id="username" name="username" placeholder="Tú Nombre de usuario " value="{{ old('username') }}">
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-800 font-bold">
                        Email
                    </label>
                    <input class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror" type="email"
                        id="email" name="email" placeholder="Tú Email de resgistro" value="{{ old('email') }}">

                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-800 font-bold">
                        Password
                    </label>
                    <input class="border p-3 w-full rounded-lg @error('password ') border-red-500 @enderror" type="password"
                        id="passwors" name="password" placeholder="Password de resgistro">
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-800 font-bold">
                        Repertir Password
                    </label>
                    <input class="border p-3 w-full rounded-lg" type="password" id="passwors_confirmation"
                        name="password_confirmation" placeholder="Repite tu Password">
                </div>

                <input type="submit" value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white">

            </form>
        </div>
    </div>
@endsection
