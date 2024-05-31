<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function create()
    {
        return view('autos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'placa' => 'required|string|max:10|unique:autos',
            'anio' => 'required|integer|min:1900|max:' . date('Y'),
            'kilometraje' => 'required|integer|min:0',
            'tipo_combustible' => 'required|string|max:50',
            'precio' => 'required|numeric|min:0',
            'transmision' => 'required|string|max:50',
            'descripcion' => 'nullable|string',
        ]);

        Auto::create($request->all());

        return redirect()->route('autos.index')->with('success', 'Auto registrado exitosamente.');
    }

    public function index()
    {
        $autos = Auto::all();
        return view('autos.index', compact('autos'));
    }

    public function show(Auto $auto)
    {
        return view('autos.show', compact('auto'));
    }

    public function edit(Auto $auto)
    {
        return view('autos.edit', compact('auto'));
    }

    public function update(Request $request, Auto $auto)
    {
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'placa' => 'required|string|max:10|unique:autos,placa,' . $auto->id,
            'anio' => 'required|integer|min:1900|max:' . date('Y'),
            'kilometraje' => 'required|integer|min:0',
            'tipo_combustible' => 'required|string|max:50',
            'precio' => 'required|numeric|min:0',
            'transmision' => 'required|string|max:50',
            'descripcion' => 'nullable|string',
        ]);

        $auto->update($request->all());

        return redirect()->route('autos.index')->with('success', 'Auto actualizado exitosamente.');
    }

    public function destroy(Auto $auto)
    {
        $auto->delete();
        return redirect()->route('autos.index')->with('success', 'Auto eliminado exitosamente.');
    }
}
