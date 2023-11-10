<?php
/** @var \App\Models\Articulos[] $articulos */
?>
@extends('layout.app')
@section('title', 'Listado de artículos')
@section('content')
    <div class="mb-3">
        <h1 class="text-3xl font-bold text-gray-800">Listado de Artículos</h1>
    </div>
    <div class="mb-5">
{{--        {{route('corte.index')}}--}}
        <a href="{{route('articulo.create')}}" aria-label="Crear un nuevo corte" class="px-3 py-2 flex items-center gap-2 bg-gray-800 text-white rounded">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zM9 9V5a1 1 0 112 0v4h4a1 1 0 110 2h-4v4a1 1 0 11-2 0v-4H5a1 1 0 110-2h4z"
                      clip-rule="evenodd" />
            </svg>
            Crear articulos nuevo
        </a>
    </div>
    <div class="flex flex-wrap gap-5 lg:gap-10 justify-center">
        @foreach($articulos as $articulo)
            <div class="w-full lg:w-1/6">
                <div class="flex flex-col gap-1 lg:gap-3 rounded shadow-lg overflow-hidden">
                    <div class="h-48 w-full flex justify-center items-center">
                        <img src="{{ url('/uploads/images/articulos/' . $articulo->imagen)}}" alt="Articulo {{$articulo->id}}" class="w-full h-full object-contain object-center">
                    </div>
                    <div class="px-5 py-3">
                        <h2 class="text-xl font-bold text-gray-800">{{$articulo->nombre}}</h2>
                        <p class="text-gray-600">{{$articulo->descripcion}}</p>
                        <p class="text-gray-600">Precio: {{$articulo->precio}}</p>
                    </div>
                    <div class="bg-gray-100 px-5 py-3 flex justify-between">
                        <a href="{{route('articulo.show', ['id' => $articulo->id_articulo])}}" class="text-gray-800 font-bold">Ver más</a>
                        <a href="{{route('articulo.edit', ['id' => $articulo->id_articulo])}}" class="text-yellow-500 font-bold">Editar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{--        paginacion de laravel--}}
    <div class="mt-5">
        {{$articulos->links()}}
    </div>
@endsection
