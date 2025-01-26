<?php

namespace App\Http\Controllers;

use App\Models\Pieza;
use Illuminate\Http\Request;

class PiezaController extends Controller
{
    public function index()
    {
        $piezas = Pieza::all();
        return response()->json($piezas, 200);
    }

    public function show($id)
    {
        $pieza = Pieza::find($id);
        if (!$pieza) {
            return response()->json(['error' => 'Pieza no encontrada'], 404);
        }
        return response()->json($pieza, 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:100',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $pieza = Pieza::create($validatedData);
        return response()->json($pieza, 201);
    }

    public function update(Request $request, $id)
    {
        $pieza = Pieza::find($id);
        if (!$pieza) {
            return response()->json(['error' => 'Pieza no encontrada'], 404);
        }

        $validatedData = $request->validate([
            'nombre' => 'required|string|max:100',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $pieza->update($validatedData);
        return response()->json($pieza, 200);
    }

    public function destroy($id)
    {
        $pieza = Pieza::find($id);
        if (!$pieza) {
            return response()->json(['error' => 'Pieza no encontrada'], 404);
        }

        $pieza->delete();
        return response()->json(null, 204);
    }
}