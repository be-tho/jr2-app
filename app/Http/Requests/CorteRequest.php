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
            'id_corte' => 'required',
            'nombre' => ['required', 'min:3'],
            'cantidad' => 'required',
            'articulos' => ['required', 'min:3'],
            'costureros' => ['required', 'min:3'],
        ];
    }

    public function messages()
    {
        return [
            'id_corte.required' => 'El campo numero de corte es obligatorio',
            'nombre.required' => 'El campo tipo de tela es obligatorio',
            'nombre.min' => 'El campo tipo de tela debe tener al menos 3 caracteres',
            'cantidad.required' => 'El campo cantidad es obligatorio',
            'articulos.required' => 'El campo articulos es obligatorio',
            'articulos.min' => 'El campo articulos debe tener al menos 3 caracteres',
            'costureros.required' => 'El campo costureros es obligatorio',
            'costureros.min' => 'El campo costureros debe tener al menos 3 caracteres',
        ];
    }
}
