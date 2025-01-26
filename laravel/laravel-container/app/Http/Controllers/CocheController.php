<?php

namespace App\Http\Controllers;

use App\Models\Coche;
use Illuminate\Http\Request;

class CocheController extends Controller
{
    public function index()
    {
        $coches = Coche::with('cliente')->get();
        return response()->json($coches, 200);
    }

    public function show($id)
    {
        $coche = Coche::with('cliente')->find($id);
        if (!$coche) {
            return response()->json(['error' => 'Coche no encontrado'], 404);
        }
        return response()->json($coche, 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'matricula' => 'required|string|unique:coches,matricula',
            'marca' => 'required|string|max:50',
            'modelo' => 'required|string|max:50',
            'cliente_id' => 'required|exists:clientes,id',
        ]);

        $coche = Coche::create($validatedData);
        return response()->json($coche, 201);
    }

    public function update(Request $request, $id)
    {
        $coche = Coche::find($id);
        if (!$coche) {
            return response()->json(['error' => 'Coche no encontrado'], 404);
        }

        $validatedData = $request->validate([
            'matricula' => 'required|string|unique:coches,matricula,' . $coche->id,
            'marca' => 'required|string|max:50',
            'modelo' => 'required|string|max:50',
            'cliente_id' => 'required|exists:clientes,id',
        ]);

        $coche->update($validatedData);
        return response()->json($coche, 200);
    }

    public function destroy($id)
    {
        $coche = Coche::find($id);
        if (!$coche) {
            return response()->json(['error' => 'Coche no encontrado'], 404);
        }

        $coche->delete();
        return response()->json(null, 204);
    }
}
