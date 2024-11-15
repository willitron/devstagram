@extends('layouts.app')

@section('titulo')
    Inicia Sesion en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-7/12 ">
            <img src="{{ asset('img/login.jpg') }}" alt="imagen Login usuario">
        </div>

        <div class="md:w-4/12 bg-white shadow rounded-lg p-6 ">
            <form method="POST" action="{{ route('login') }}" novalidate>
                @csrf
                @if (session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center font-bold">
                        {{ session('mensaje') }}</p>
                @endif

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
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="" class=" text-gray-500 text-sm">
                        Mantener mì sesión abierta
                    </label>
                </div>

                <input type="submit" value="Iniciar Sesion"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white">

            </form>
        </div>
    </div>
@endsection
