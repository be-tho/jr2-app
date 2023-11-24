<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CorteRequest extends FormRequest
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
            'numero_corte' => ['required', 'numeric'],
            'nombre' => ['required', 'min:3'],
            'colores' => ['required', 'min:3'],
            'cantidad' => 'required',
            'articulos' => ['required', 'min:3'],
            'costureros' => ['required', 'min:3'],
            'imagen' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ];
    }

    public function messages()
    {
        return [
            'numero_corte.required' => 'El campo numero de corte es obligatorio',
            'numero_corte.numeric' => 'El campo numero de corte debe ser numerico',
            'nombre.required' => 'El campo tipo de tela es obligatorio',
            'nombre.min' => 'El campo tipo de tela debe tener al menos 3 caracteres',
            'colores.required' => 'El campo colores es obligatorio',
            'colores.min' => 'El campo colores debe tener al menos 3 caracteres',
            'cantidad.required' => 'El campo cantidad es obligatorio',
            'articulos.required' => 'El campo articulos es obligatorio',
            'articulos.min' => 'El campo articulos debe tener al menos 3 caracteres',
            'costureros.required' => 'El campo costureros es obligatorio',
            'costureros.min' => 'El campo costureros debe tener al menos 3 caracteres',
            'imagen.image' => 'El archivo debe ser una imagen',
            'imagen.mimes' => 'El archivo debe ser una imagen',
        ];
    }
}
