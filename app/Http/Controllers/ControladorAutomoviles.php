<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorAutomoviles extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('autos.index', ['cars' => $cars]);
    }

    public function crearAuto(Request $request)
    {
        // Validación de entrada
        $datosValidos = $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'año' => 'required|integer|min:1900',
            'precio nuevo' => 'required|numeric|min:0',
            'precio usado' => 'required|numeric|min:0',
            'kilometraje' => 'required|integer|min:0',
            'Observaciones' => 'nullable|string'
        ]);

        // Creación del auto
        $auto = Auto::create($datosValidos);

        // Respuesta exitosa
        return response()->json([
            'mensaje' => 'Auto creado exitosamente',
            'auto' => $auto
        ], 201);
    }

    public function show($id )
    {
        $car = Car::find($id);
        return view('autos.show', ['car' => $car]);
    }

    public function update(Request $request, $id)
    {
               // Validación de datos de entrada
               $datosValidos = $request->validate([
                'marca' => 'required|string|max:255',
                'modelo' => 'required|string|max:255',
                'año' => 'required|integer|min:1900',
                'precio nuevo' => 'required|numeric|min:0',
                'precio usado' => 'required|numeric|min:0',
                'kilometraje' => 'required|integer|min:0',
                'Observaciones' => 'nullable|string'
            ]);
            $datosValidos->update($request->all());
    
            return redirect()->route('autos.index')->with('success', 'Auto actualizado exitosamente.');
    }

    public function destroy(Auto $auto)
    {
        $auto->delete();
        return redirect()->route('autos.index')->with('success', 'Auto eliminado exitosamente.');
    
    }

}
