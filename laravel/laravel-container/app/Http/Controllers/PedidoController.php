<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::with('cliente')->get();
        return response()->json($pedidos, 200);
    }

    public function show($id)
    {
        $pedido = Pedido::with(['cliente', 'detallesPedidos'])->find($id);
        if (!$pedido) {
            return response()->json(['error' => 'Pedido no encontrado'], 404);
        }
        return response()->json($pedido, 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fecha_pedido' => 'required|date',
            'estado' => 'required|string|max:50',
            'cliente_id' => 'required|exists:clientes,id',
        ]);

        $pedido = Pedido::create($validatedData);
        return response()->json($pedido, 201);
    }

    public function update(Request $request, $id)
    {
        $pedido = Pedido::find($id);
        if (!$pedido) {
            return response()->json(['error' => 'Pedido no encontrado'], 404);
        }

        $validatedData = $request->validate([
            'fecha_pedido' => 'required|date',
            'estado' => 'required|string|max:50',
            'cliente_id' => 'required|exists:clientes,id',
        ]);

        $pedido->update($validatedData);
        return response()->json($pedido, 200);
    }

    public function destroy($id)
    {
        $pedido = Pedido::find($id);
        if (!$pedido) {
            return response()->json(['error' => 'Pedido no encontrado'], 404);
        }

        $pedido->delete();
        return response()->json(null, 204);
    }
}
