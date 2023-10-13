<?php
/** @var \App\Models\Cortes[] $cortes */
?>
@extends('layout.app')
@section('title', 'Listado de cortes')
@section('content')
<div class="mb-3">
    <h1 class="text-3xl font-bold text-gray-800">Listado de cortes</h1>
</div>
<div>
{{--    {{ route('cortes.create') }}--}}
    <a href="{{route('corte.index')}}" aria-label="Crear un nuevo corte" class="px-3 py-2 flex items-center gap-2 bg-gray-800 text-white rounded">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
            <path fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zM9 9V5a1 1 0 112 0v4h4a1 1 0 110 2h-4v4a1 1 0 11-2 0v-4H5a1 1 0 110-2h4z"
                  clip-rule="evenodd" />
        </svg>
        Crear corte nuevo
    </a>
</div>
<div class="mx-auto">
    <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Corte</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Tela</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Encimadas</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Artículos</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Costureros</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Fecha de corte</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Estado</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Acciones</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach($cortes as $corte)
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{$corte->id_corte}}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$corte->nombre}}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$corte->cantidad}}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$corte->articulos}}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$corte->costureros}}</td>
{{--                                fecha seteada dd-mm-yy --}}
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$corte->fecha}}</td>
{{--                                estado 0 = cortado, 1 = en proceso, 2 = terminado--}}
                                @if($corte->estado == 0 )
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-white bg-sky-800 font-bold text-center">Cortado</td>
                                @endif
                                @if($corte->estado == 1 )
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-white bg-rose-800 font-bold text-center">Entregado</td>
                                @endif
                                @if($corte->estado == 2 )
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-white bg-emerald-800 font-bold text-center">Costurado</td>
                                @endif
                                <td class="whitespace-nowrap px-3 py-4 flex items-center gap-2 text-sm text-gray-500">
                                    <a href="{{ route('corte.edit', ['id' => $corte->id]) }}" class="" aria-label="Editar el local {{$corte->name}}">
                                        <button class="px-3 py-2 flex items-center gap-2 bg-blue-500 text-white rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                            Editar
                                        </button>
                                    </a>
{{--                                    {{ route('local.delete', ['id' => $corte->id]) }}--}}
                                    <form action="" method="post" onsubmit="return confirm('¿Seguro deseas eliminarlo?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="px-3 py-2 flex items-center gap-2 bg-red-500 text-white rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
