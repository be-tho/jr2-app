<?php
/** @var \App\Models\Articulos[] $articulo */
?>
@extends('layout.app')
@section('title', 'Listado de artículos')
@section('content')
    <div class="mb-5">
        <a href="{{route('articulo.index')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"></path>
            </svg>
            Volver
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-6 justify-center align-middle  gap-4">
        <div class=" md:col-start-2 md:col-span-4 bg-white p-10 rounded-lg shadow-lg">
            <h1 class="text-3xl font-bold text-gray-800 mb-5">Articulo N° #{{$articulo->id_articulo}}</h1>
{{--            muestreo de cada articulo --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <div class="mb-2">
                        <h2 class="text-lg text-gray-800 font-bold">Nombre</h2>
                    </div>
                    <div class="mb-2">
                        <p class="text-gray-700">{{$articulo->nombre}}</p>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="mb-2">
                        <h2 class="text-lg text-gray-800 font-bold">Descripción</h2>
                    </div>
                    <div class="mb-2">
                        <p class="text-gray-700">{{$articulo->descripcion}}</p>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="mb-2">
                        <h2 class="text-lg text-gray-800 font-bold">Precio</h2>
                    </div>
                    <div class="mb-2">
                        <p class="text-gray-700">$ {{$articulo->precio}}</p>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="mb-2">
                        <h2 class="text-lg text-gray-800 font-bold">Temporada</h2>
                    </div>
                    <div class="mb-2">
                        @if($articulo->temporada_id == 1)
                            <p class="text-gray-700">Invierno 2023</p>
                        @elseif($articulo->temporada_id == 2)
                            <p class="text-gray-700">Verano 2024</p>
                        @endif
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="mb-2">
                        <p class="text-lg text-gray-700 font-bold">{{$articulo->nombre}}</p>
                    </div>
                    <div class="mb-2">
                        <img src="{{ url('/uploads/images/articulos/' . $articulo->imagen)}}" alt="{{$articulo->imagen_alt}}">
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="mb-2">
                        <p class="text-lg text-gray-700 font-bold">Creado el : {{$articulo->created_at}}</p>
                    </div>
            </div>
{{--            fin de muestreo de cada articulo --}}
        </div>
    </div>
@endsection
