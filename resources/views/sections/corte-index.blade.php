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
                <div class="">
                    <label for="id_corte" class="block form-label mb-2">
                        Nro de corte *
                    </label>
                    {{--@formatter:off--}}
                    <input type="number"
                           name="id_corte"
                           id="id_corte"
                           class="block w-full px-4 py-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-stacc-purple focus:ring-stacc-purple
										focus:outline-none focus:ring focus:ring-opacity-40"
                           placeholder="Ingrese el numero de corte"
                           @error('id_corte')
                           aria-describedby="error-id_corte"
                           @enderror
                           value="{{ old('id_corte') }}"
                    >
                    @error('id_corte')
                    <div class="text-red-700" id="error-id_corte">{{ $errors->first('id_corte') }}</div>
                    @enderror
                    {{--@formatter:on--}}
                </div>
                <div class="">
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
                <div class="">
                    <label for="cantidad" class="block form-label mb-2">
                        Cantidad de encimadas
                    </label>
                    {{--@formatter:off--}}
                    <input type="number"
                           name="cantidad"
                           id="cantidad"
                           class="block w-full px-4 py-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-stacc-purple focus:ring-stacc-purple
										focus:outline-none focus:ring focus:ring-opacity-40"
                           placeholder="Ingrese el numero de corte"
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
                <div class="">
                    <label for="articulos" class="block form-label mb-2">
                        Artículos
                    </label>
                    {{--@formatter:off--}}
                    <input type="text"
                           name="articulos"
                           id="articulos"
                           class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-stacc-purple focus:ring-stacc-purple
										focus:outline-none focus:ring focus:ring-opacity-40"
                           placeholder="Ingresa la tela del corte"
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
            </div>
            <div class="grid grid-cols-1 gap-6 mt-2 md:grid-cols-2" >
                <div class="">
                    <label for="costureros" class="block form-label mb-2">
                        Costureros
                    </label>
                    {{--@formatter:off--}}
                    <input type="text"
                           name="costureros"
                           id="costureros"
                           class="block w-full px-4 py-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-stacc-purple focus:ring-stacc-purple
                                                                        focus:outline-none focus:ring focus:ring-opacity-40"                       placeholder="Ingrese el numero de corte"
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
            <div class="mt-6 mx-auto">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Registrar
                </button>
            </div>
        </form>
    </div>
@endsection
