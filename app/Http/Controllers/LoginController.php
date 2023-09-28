<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    /* @param LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function store(LoginRequest $request)
    {
        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            return to_route('home.index')->with('success', 'Login realizado com exito');
        }
        return back()->with([
            'error' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }

    public function destroy()
    {
        Auth::logout();
        return to_route('auth.index')->with('success', 'Logout realizado com exito, te esperamos pronto');
    }
}
