<?php
/** @var \App\Models\Temporadas[] $temporadas */
?>
@extends('layout.app')
@section('title', 'Crear artículo nuevo')
@section('content')
    <div class="mb-5">
        <a href="{{route('home.index')}}"
           class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M11 19l-7-7 7-7m8 14l-7-7 7-7"></path>
            </svg>
            Volver
        </a>
{{--        boton de enviar formulario /--}}
    </div>
    <div class="mb-3">
        <h1 class="text-3xl font-bold text-gray-800 text-center">Creación de Artículo</h1>
    </div>
    <div class="flex-1 md:w-8/12 justify-center py-5 m-auto">
        <form action="{{ route('articulo.store')}}" enctype="multipart/form-data" method="post" class="flex flex-col gap-6 bg-white p-5 rounded-lg shadow-md">
            @csrf
            @method('POST')
            <div class="grid grid-cols-1 gap-6 mt-2 md:grid-cols-2" >
                <div class="">
                    <label for="nombre" class="block form-label mb-2">
                        Nombre
                    </label>
                    {{--@formatter:off--}}
                    <input type="text"
                           name="nombre"
                           id="nombre"
                           class="block w-full px-4 py-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-blue-600 focus:ring-blue-900
										focus:outline-none focus:ring focus:ring-opacity-40"
                           placeholder="Ingrese el nombre del articulo"
                           @error('nombre')
                           aria-describedby="error-id_corte"
                           @enderror
                           value="{{ old('nombre') }}"
                    >
                    @error('nombre')
                    <div class="text-red-700" id="error-nombre">{{ $errors->first('nombre') }}</div>
                    @enderror
                    {{--@formatter:on--}}
                </div>
                <div class="">
                    <label for="descripcion" class="block form-label mb-2">
                        Descripción
                    </label>
                    {{--@formatter:off--}}
                    <input type="text"
                           name="descripcion"
                           id="descripcion"
                           class="block w-full px-4 py-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-blue-600 focus:ring-blue-900
										focus:outline-none focus:ring focus:ring-opacity-40"
                           placeholder="Ingrese la descripción del articulo"
                           @error('descripcion')
                           aria-describedby="error-descripcion"
                           @enderror
                           value="{{ old('descripcion') }}"
                    >
                    @error('nombre')
                    <div class="text-red-700" id="error-descripcion">{{ $errors->first('descripcion') }}</div>
                    @enderror
                    {{--@formatter:on--}}
                </div>
            </div>
            <div class="grid grid-cols-1 gap-6 mt-2 md:grid-cols-2" >
                <div class="">
                    <label for="temporada_id" class="block form-label mb-2">
                        Temporada
                    </label>
                    {{--@formatter:off--}}
                    <select name="temporada_id"
                            id="temporada_id"
                            class="block w-full px-4 py-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-blue-600 focus:ring-blue-900
										focus:outline-none focus:ring focus:ring-opacity-40"
                            @error('temporada_id')
                            aria-describedby="error-temporada_id"
                        @enderror
                    >
                        <option value="">Selecciona una temporada</option>
                        @foreach($temporadas as $temporada)
                            <option value="{{ $temporada->id }}"
                                    @if(old('temporada_id') == $temporada->id) selected @endif
                            >{{ $temporada->nombre }}</option>
                        @endforeach
                    </select>
                    @error('temporada_id')
                    <div class="text-red-700" id="error-temporada_id">{{ $errors->first('temporada_id') }}</div>
                    @enderror
                </div>
                <div>
                    <label for="precio" class="block form-label mb-2">
                        Precio
                    </label>
                    {{--@formatter:off--}}
                    <input type="number"
                           name="precio"
                           id="precio"
                           class="block w-full px-4 py-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-blue-600 focus:ring-blue-900
										focus:outline-none focus:ring focus:ring-opacity-40"
                           placeholder="Ingrese el precio"
                           @error('precio')
                           aria-describedby="error-precio"
                           @enderror
                           value="{{ old('precio') }}"
                    >
                    @error('precio')
                    <div class="text-red-700" id="error-precio">{{ $errors->first('precio') }}</div>
                    @enderror
                    {{--@formatter:on--}}
                </div>
            </div>
            <div class="grid grid-cols-1 gap-6 mt-2 md:grid-cols-2" >
                <div class="grid grid-cols-1 gap-6 mt-6 md:grid-cols-2">
                    <div class="">
                        <label for="image" class="block form-label mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block bi bi-camera" viewBox="0 0 16 16">
                                <path
                                    d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
                                <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                            </svg>
                            Imagen del articulo
                        </label>
                        {{--@formatter:off--}}
                        <input type="file"
                               name="image"
                               id="image"
                               class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-stacc-purple focus:ring-stacc-purple
										focus:outline-none focus:ring focus:ring-opacity-40"
                               placeholder="Imagen del local"
                               @error('image')
                               aria-describedby="error-image"
                               @enderror
                               value="{{ old('image') }}"
                        >
                        @error('image')
                        <div class="text-red-700" id="error-opening_time">{{ $errors->first('image') }}</div>
                        @enderror
                        {{--@formatter:on--}}
                    </div>
                </div>
            </div>
            <button type="submit"
                    class="inline-flex justify-center items-center px-4 py-3 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-green-900 focus:shadow-outline-green disabled:opacity-25 transition ease-in-out duration-150">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M5 13l4 4L19 7"></path>
                </svg>
                Crear Artículo
            </button>
        </form>
    </div>

@endsection

