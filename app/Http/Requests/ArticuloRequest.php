<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticuloRequest extends FormRequest
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
            'temporada_id' => 'required',
            'nombre' => ['required', 'min:3'],
            'descripcion' => ['required', 'min:3'],
            'precio' => 'required',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif,svg',
            //
        ];
    }

    public function messages()
    {
        return[
            'temporada_id.required' => 'El campo temporada es obligatorio',
            'nombre.required' => 'El campo nombre es obligatorio',
            'nombre.min' => 'El campo nombre debe tener al menos 3 caracteres',
            'descripcion.required' => 'El campo descripcion es obligatorio',
            'descripcion.min' => 'El campo descripcion debe tener al menos 3 caracteres',
            'precio.required' => 'El campo precio es obligatorio',
            'imagen.image' => 'El campo imagen debe ser una imagen',
            'imagen.mimes' => 'El campo imagen debe ser un archivo de tipo: jpeg, png, jpg, gif, svg',
        ];
    }

}
