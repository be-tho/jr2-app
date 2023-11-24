<?php
/** @var \App\Models\Cortes[] $corte */
?>
@extends('layout.app')
@section('title', 'Numero de corte: ,' . $corte->id)
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
    <div class="mb-5">
        <h1 class="text-center text-3xl font-bold text-gray-800">Corte de {{$corte->nombre}}</h1>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-6 justify-center align-middle  gap-4">
        <div class=" md:col-start-2 md:col-span-4 bg-white p-10 rounded-lg shadow-lg">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <div class="mb-2">
                        <h2 class="text-lg text-gray-800 font-bold">Numero de Corte</h2>
                    </div>
                    <div class="mb-2">
                        <p class="text-gray-700">#{{$corte->numero_corte}}</p>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="mb-2">
                        <h2 class="text-lg text-gray-800 font-bold">Tela</h2>
                    </div>
                    <div class="mb-2">
                        <p class="text-gray-700">{{$corte->nombre}}</p>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="mb-2">
                        <h2 class="text-lg text-gray-800 font-bold">Colores</h2>
                    </div>
                    <div class="mb-2">
{{--                        dentro de $corte->colores hay varios colores como un string, hacer un salgo de pagina cuando encuentres una ","  --}}
                        @foreach(explode(',',$corte->colores) as $color)
                            <p class="text-gray-700">{{$color}}</p>
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="mb-2">
                        <h2 class="text-lg text-gray-800 font-bold">Encimadas</h2>
                    </div>
                    <div class="mb-2">
                        <p class="text-gray-700">{{$corte->cantidad}}</p>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="mb-2">
                        <h2 class="text-lg text-gray-800 font-bold">Artículos</h2>
                    </div>
                    <div class="mb-2">
                        <p class="text-gray-700">{{$corte->articulos}}</p>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="mb-2">
                        <h2 class="text-lg text-gray-800 font-bold">Costureros</h2>
                    </div>
                    <div class="mb-2">
                        <p class="text-gray-700">{{$corte->costureros}}</p>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="mb-2">
                        <h2 class="text-lg text-gray-800 font-bold">Fecha de corte</h2>
                    </div>
                    <div class="mb-2">
                        <p class="text-gray-700">{{$corte->fecha}}</p>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="mb-2">
                        <h2 class="text-lg text-gray-800 font-bold">Estado</h2>
                    </div>
                    <div class="mb-2">
                        @if($corte->estado == 0 )
                            <p class="text-gray-700">Cortado</p>
                        @endif
                        @if($corte->estado == 1 )
                            <p class="text-gray-700">Entregado</p>
                        @endif
                        @if($corte->estado == 2 )
                            <p class="text-gray-700">Costurado</p>
                        @endif
                    </div>
                </div>
                <div class="flex flex-col">
{{--                    mostrar la imagen del corte --}}
                    <div class="mb-2">
                        <h2 class="text-lg text-gray-800 font-bold">Imagen</h2>
                    </div>
                    <div class="mb-2">
                        <img src="{{ url('/uploads/images/cortes/' . $corte->imagen)}}" alt="{{$corte->imagen_alt}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
