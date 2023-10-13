<?php

namespace App\Http\Controllers;

use App\Http\Requests\CorteRequest;
use Illuminate\Http\Request;
use App\Models\Cortes;
class CorteController extends Controller
{
    //
    public function index()
    {
        return view('sections.corte-index');
    }

    public function store(CorteRequest $request)
    {
        $validated = $request->validated();

        Cortes::create([
            'id_corte' => $request->id_corte,
            'fecha' => now(),
            'nombre' => $request->nombre,
            'cantidad' => $request->cantidad,
            'articulos' => $request->articulos,
            'costureros' => $request->costureros,
            'estado' => 0,
            'created_at' => now(),
        ]);
        return to_route('home.index')->with('success', 'Corte creado correctamente');
//        return redirect()->route('home.index');
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
