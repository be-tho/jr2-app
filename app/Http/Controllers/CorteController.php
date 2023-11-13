<?php

namespace App\Http\Controllers;

use App\Http\Requests\CorteRequest;
use Illuminate\Http\Request;
use App\Models\Cortes;
use Intervention\Image\Facades\Image;

class CorteController extends Controller
{
    //
    public function index()
    {
        return view('sections.corte-index');
    }

    public function store(CorteRequest $request)
    {
        try {
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $nombre_imagen = time() . '_' . $imagen->getClientOriginalName();
                $ruta_imagen = public_path() . '/uploads/images/cortes/' . $nombre_imagen;
                Image::make($imagen->getRealPath())
                    ->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->save($ruta_imagen);
                $request->imagen = $nombre_imagen;
                $request->imagen_alt = $nombre_imagen;
            } else {
                $request->imagen = 'default-corte.jpg';
                $request->imagen_alt = 'default-corte.jpg';
            }

            $request->validated();

            Cortes::create([
                'nombre' => $request->nombre,
                'cantidad' => $request->cantidad,
                'articulos' => $request->articulos,
                'costureros' => $request->costureros,
                'imagen' => $request->imagen,
                'imagen_alt' => $request->imagen_alt,
                'fecha' => now(),
                'estado' => 0,
                'created_at' => now(),
            ]);

            return to_route('home.index')->with('success', 'Corte creado correctamente');
        }catch (Exception $e) {
            return to_route('home.index')->with('error', 'Error al crear el corte');
        }
    }

    public function show($id)
    {
        $corte = Cortes::find($id);
        return view('sections.corte-show', ['corte' => $corte]);
    }

    public function edit($id)
    {
        $corte = Cortes::find($id);
        return view('sections.corte-edit', ['corte' => $corte]);
    }

    public function update(CorteRequest $request, $id)
    {
        $validated = $request->validated();
        $formData = $request->input();

        $corte = Cortes::findOrFail($id);
        $corte->update($formData);
        $corte->save();

        return to_route('home.index')->with('success', 'Corte actualizado correctamente');
    }

}
