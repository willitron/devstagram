@extends('layouts.app')

@section('titulo')
    Crear nuevo Post
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush


@section('contenido')
    <div class="md:flex md:items-center items-">
        <div class="md:w-1/2 px-10">

            <form action="{{ route('imagenes.store') }}" method="POST" enctype="multipart/form-data" id="dropzone"
                class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
                @csrf
                {{-- <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script> --}}
            </form>


        </div>

        <div class="md:w-1/2 px-10  bg-white shadow rounded-lg p-6 mt-10 md:mt-0 ">
            <form action="{{ route('post.store') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="titulo" class="mb-2 block uppercase text-gray-800 font-bold">
                        Titulo
                    </label>
                    <input class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" type="text"
                        id="titulo" name="titulo" placeholder="Titulo de la publicacion " value="{{ old('titulo') }}">
                    @error('titulo')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="descripcion" class="mb-2 block uppercase text-gray-800 font-bold">
                        Descripcion
                    </label>
                    <textarea class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" id="descripcion"
                        name="descripcion" placeholder="Descripcion de la publicacion ">{{ old('descripcion') }}</textarea>
                    @error('descripcion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <input type="hidden" name="imagen" id="imagen" value="{{ old('imagen') }}" />

                    @error('imagen')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <input type="submit" value="Crear Publicacion"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white">

            </form>
        </div>

    </div>
@endsection
