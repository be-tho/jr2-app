@extends('layout.app')
@section('title', 'Login')
@section('content')
    <div class="md:justify-center mx-auto pt-20">
        <div class="bg-white p-6 rounded-lg shadow-xl">
            <form action="#" method="POST" novalidate>
                <div class="text-gray-900 mb-5 ">
                    <h1 class="text-gray-900 uppercase font-bold">Iniciar sesión</h1>
                    <p>Ingrese su correo y contaseña</p>
                </div>
                @csrf
                <div class="mb-5">
                    <label for="email" class="block uppercase text-gray-500 text-sm mb-2">Email</label>
                    <input type="email" name="email" id="email" placeholder="Tu email"
                           class=" p-3 bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent rounded-lg shadow-sm w-full @error('email') border-2 border-red-500 @enderror"
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

            </form>
        </div>
    </div>

@endsection
