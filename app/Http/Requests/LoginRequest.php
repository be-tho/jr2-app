<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:9'
            //
        ];
    }
    public function messages()
    {
        return [
            'email.required'      => 'El email es obligatorio',
            'email.email'         => 'El email debe ser un email valido',
            'password.required'   => 'La contraseña es obligatorio',
            'password.min'        => 'Debe tener como minimo 4 caracteres',
        ];
    }
}
