@extends('layout.app')
@section('title', 'Dolar')
@section('content')
    <section class="mx-auto ">
        <div class="mb-5">
            <h1 class="text-3xl font-bold text-gray-800">Dolar hoy</h1>
        </div>
        {{--  3 BLOQUES EN MEDIO, EN CADA UNO UN DOLAR DISTINTO --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white p-10 rounded-lg shadow-lg">
                <p class="text-gray-800 text-xl font-bold">Dolar Oficial</p>
                <p class="text-gray-800 text-3xl font-bold">${{ $dolarOficial }}</p>
            </div>
            <div class="bg-white p-10 rounded-lg shadow-lg">
                <p class="text-gray-800 text-xl font-bold">Dolar Blue</p>
                <p class="text-gray-800 text-3xl font-bold">${{ $dolarBlue }}</p>
            </div>
            <div class="bg-white p-10 rounded-lg shadow-lg">
                <p class="text-gray-800 text-xl font-bold">Dolar Intermedio</p>
                <p class="text-gray-800 text-3xl font-bold">${{ $dolarIntermedio }}</p>
            </div>
        </div>
    </section>
@endsection
