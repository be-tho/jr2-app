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
    <div>
        <h1 class="text-3xl font-bold text-gray-800">Articulo N° #{{$articulo->id_articulo}}</h1>
        <p>nombre: {{$articulo->nombre}}</p>
    </div>
@endsection
