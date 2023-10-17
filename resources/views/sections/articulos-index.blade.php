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
        <a href="#" aria-label="Crear un nuevo corte" class="px-3 py-2 flex items-center gap-2 bg-gray-800 text-white rounded">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zM9 9V5a1 1 0 112 0v4h4a1 1 0 110 2h-4v4a1 1 0 11-2 0v-4H5a1 1 0 110-2h4z"
                      clip-rule="evenodd" />
            </svg>
            Crear articulos nuevo
        </a>
    </div>
    <div class="flex flex-wrap gap-10 justify-center">
        @foreach($articulos as $articulo)
            <div class=" sm:w-full md:w-2/5 lg:w-1/5 rounded overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl hover:scale-105 transform transition-all duration-500">
                <img  src="{{ url('/uploads/images/articulos/' . $articulo->imagen)}}" alt="{{$articulo->imagen_alt}}">
                <div class="font-bold text-3xl m-1 px-6 pt-2 "><a href="">{{$articulo->nombre}}</a></div>
                <div class="font-bold text-2xl m-1 px-6 pb-2"><a href="">${{$articulo->precio}}</a></div>
            </div>
        @endforeach
@endsection
