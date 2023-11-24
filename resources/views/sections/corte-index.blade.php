@extends('layout.app')
@section('title', 'Crear corte')
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
    </div>
    <div class="mx-auto font-bold uppercase text-center text-3xl text-blue-950 mb-3">
        <h1>Registrar corte</h1>
    </div>
    <div class="flex-1 md:w-8/12 justify-center py-5 m-auto">
        <form action="{{ route('corte.store')}}" enctype="multipart/form-data" method="post" class="flex flex-col gap-6 bg-white p-5 rounded-lg shadow-md">
            @csrf
            <div class="grid grid-cols-1 gap-6 mt-2 md:grid-cols-2" >
                <div>
                    <label for="numero_corte" class="block form-label mb-2">
                        Numero de Corte
                    </label>
                    {{--@formatter:off--}}
                    <input type="number"
                           name="numero_corte"
                           id="numero_corte"
                           class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-stacc-purple focus:ring-stacc-purple
										focus:outline-none focus:ring focus:ring-opacity-40"
                           placeholder="Ingrese el numero de corte"
                           @error('numero_corte')
                           aria-describedby="error-numero_corte"
                           @enderror
                           value="{{ old('numero_corte') }}"
                    >
                    @error('numero_corte')
                    <div class="text-red-700" id="error-numero_corte">{{ $errors->first('numero_corte') }}</div>
                    @enderror
                    {{--@formatter:on--}}
                </div>
                <div>
                    <label for="nombre" class="block form-label mb-2">
                        Tela
                    </label>
                    {{--@formatter:off--}}
                    <input type="text"
                           name="nombre"
                           id="nombre"
                           class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-stacc-purple focus:ring-stacc-purple
										focus:outline-none focus:ring focus:ring-opacity-40"
                           placeholder="Ingresa la tela del corte"
                           @error('nombre')
                           aria-describedby="error-nombre"
                           @enderror
                           value="{{ old('nombre') }}"
                    >
                    @error('nombre')
                    <div class="text-red-700" id="error-nombre">{{ $errors->first('nombre') }}</div>
                    @enderror
                    {{--@formatter:on--}}
                </div>
            </div>
            <div class="grid grid-cols-1 gap-6 mt-2 md:grid-cols-2" >
                <div>
                    <label for="colores" class="block form-label mb-2">
                        Colores
                    </label>
                    {{--@formatter:off--}}
                    <input type="text"
                           name="colores"
                           id="colores"
                           class="block w-full px-4 py-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-stacc-purple focus:ring-stacc-purple
                                                                        focus:outline-none focus:ring focus:ring-opacity-40"
                           placeholder="Ingrese los colores del corte"
                           @error('colores')
                           aria-describedby="error-colores"
                           @enderror
                           value="{{ old('colores') }}"
                    >
                    @error('colores')
                    <div class="text-red-700" id="error-colores">{{ $errors->first('colores') }}</div>
                    @enderror
                    {{--@formatter:on--}}
                </div>
                <div>
                    <label for="cantidad" class="block form-label mb-2">
                        Cantidad de encimadas
                    </label>
                    {{--@formatter:off--}}
                    <input type="number"
                           name="cantidad"
                           id="cantidad"
                           class="block w-full px-4 py-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-stacc-purple focus:ring-stacc-purple
										focus:outline-none focus:ring focus:ring-opacity-40"
                           placeholder="Ingrese la cantidad de encimadas"
                           @error('cantidad')
                           aria-describedby="error-cantidad"
                           @enderror
                           value="{{ old('cantidad') }}"
                    >
                    @error('cantidad')
                    <div class="text-red-700" id="error-cantidad">{{ $errors->first('cantidad') }}</div>
                    @enderror
                    {{--@formatter:on--}}
                </div>
            </div>
            <div class="grid grid-cols-1 gap-6 mt-2 md:grid-cols-2" >
                <div>
                    <label for="articulos" class="block form-label mb-2">
                        Artículos
                    </label>
                    {{--@formatter:off--}}
                    <input type="text"
                           name="articulos"
                           id="articulos"
                           class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-stacc-purple focus:ring-stacc-purple
										focus:outline-none focus:ring focus:ring-opacity-40"
                           placeholder="Ingrese los artículos del corte"
                           @error('articulos')
                           aria-describedby="error-articulos"
                           @enderror
                           value="{{ old('articulos') }}"
                    >
                    @error('articulos')
                    <div class="text-red-700" id="error-articulos">{{ $errors->first('articulos') }}</div>
                    @enderror
                    {{--@formatter:on--}}
                </div>
                <div>
                    <label for="costureros" class="block form-label mb-2">
                        Costureros
                    </label>
                    {{--@formatter:off--}}
                    <input type="text"
                           name="costureros"
                           id="costureros"
                           class="block w-full px-4 py-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-stacc-purple focus:ring-stacc-purple
										focus:outline-none focus:ring focus:ring-opacity-40"
                           placeholder="Ingrese los costureros del corte"
                           @error('costureros')
                           aria-describedby="error-costureros"
                           @enderror
                           value="{{ old('costureros') }}"
                    >
                    @error('costureros')
                    <div class="text-red-700" id="error-costureros">{{ $errors->first('costureros') }}</div>
                    @enderror
                    {{--@formatter:on--}}
                </div>
            </div>
            <div class="grid grid-cols-1 gap-6 mt-2 md:grid-cols-2" >
                <div class="grid grid-cols-1 gap-6 mt-6 md:grid-cols-2">
                    <div class="">
                        <label for="imagen" class="block form-label mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block bi bi-camera" viewBox="0 0 16 16">
                                <path
                                    d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
                                <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                            </svg>
                            Imagen del Corte
                        </label>
                        {{--@formatter:off--}}
                        <input type="file"
                               name="imagen"
                               id="imagen"
                               class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-stacc-purple focus:ring-stacc-purple
										focus:outline-none focus:ring focus:ring-opacity-40"
                               placeholder="Imagen del local"
                               @error('imagen')
                               aria-describedby="error-imagen"
                               @enderror
                               value="{{ old('imagen') }}"
                        >
                        @error('imagen')
                        <div class="text-red-700" id="error-opening_time">{{ $errors->first('imagen') }}</div>
                        @enderror
                        {{--@formatter:on--}}
                    </div>
                </div>
            </div>
            <div class="mt-6 mx-auto">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded uppercase">
                    Registrar
                </button>
            </div>
        </form>
    </div>
@endsection
