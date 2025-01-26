<?php

namespace App\Http\Controllers;

use App\Models\DetallePedido;
use Illuminate\Http\Request;

class DetallePedidoController extends Controller
{
    public function index()
    {
        $detalles = DetallePedido::with(['pedido', 'pieza', 'coche'])->get();
        return response()->json($detalles, 200);
    }

    public function show($id)
    {
        $detalle = DetallePedido::with(['pedido', 'pieza', 'coche'])->find($id);
        if (!$detalle) {
            return response()->json(['error' => 'Detalle del pedido no encontrado'], 404);
        }
        return response()->json($detalle, 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pedido_id' => 'required|exists:pedidos,id',
            'pieza_id' => 'required|exists:piezas,id',
            'coche_id' => 'required|exists:coches,id',
            'cantidad' => 'required|integer|min:1',
        ]);

        $detalle = DetallePedido::create($validatedData);
        return response()->json($detalle, 201);
    }

    public function update(Request $request, $id)
    {
        $detalle = DetallePedido::find($id);
        if (!$detalle) {
            return response()->json(['error' => 'Detalle del pedido no encontrado'], 404);
        }

        $validatedData = $request->validate([
            'pedido_id' => 'required|exists:pedidos,id',
            'pieza_id' => 'required|exists:piezas,id',
            'coche_id' => 'required|exists:coches,id',
            'cantidad' => 'required|integer|min:1',
        ]);

        $detalle->update($validatedData);
        return response()->json($detalle, 200);
    }

    public function destroy($id)
    {
        $detalle = DetallePedido::find($id);
        if (!$detalle) {
            return response()->json(['error' => 'Detalle del pedido no encontrado'], 404);
        }

        $detalle->delete();
        return response()->json(null, 204);
    }
}