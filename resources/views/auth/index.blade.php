@extends('layout.app')
@section('title', 'Login')
@section('content')
    <div class="w-10/12 md:w-4/12 md:justify-center mx-auto pt-20">
        <div class="bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('auth.store') }}" method="POST" novalidate>
                <div class="text-gray-900 mb-5 text-center">
                    <h1 class="text-gray-700 uppercase font-bold text-2xl">LOGIN</h1>
                    <p>Ingrese su correo y contaseña</p>
                </div>
                @csrf
                <div class="mb-5">
                    <label for="email" class="block uppercase text-gray-500 text-sm mb-2">Email</label>
                    <input type="email" name="email" id="email" placeholder="example@example.com"
                           class=" p-3 bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent rounded-lg shadow-sm w-full
                           @error('email') border-2 border-red-500 @enderror"
                           value="{{ old('email') }}">
                    @error('email')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="block text-gray-700 text-sm mb-2">Password</label>
                    <input type="password" name="password" id="password" placeholder="Tu password"
                           class="p-3 bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent rounded-lg shadow-sm w-full @error('password') border-2 border-red-500 @enderror"
                           value="{{ old('password') }}">
                    @error('password')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                @if(Session::get('error'))
                    <div class="py-1 px-2 bg-red-600 text-white rounded mb-5">
                        {{ Session::get('error') }}
                    </div>
                @endif
                <div class="mb-5">
                    <button type="submit"
                            class="w-full bg-blue-950 hover:bg-blue-900 text-white font-bold p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent">
                        Iniciar sesión
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
