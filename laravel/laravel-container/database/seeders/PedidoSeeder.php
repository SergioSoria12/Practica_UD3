<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pedido;

class PedidoSeeder extends Seeder
{
    public function run()
    {
        Pedido::create(['fecha_pedido' => '2025-01-01', 'estado' => 'Pendiente', 'cliente_id' => 1]);
        Pedido::create(['fecha_pedido' => '2025-01-10', 'estado' => 'Completado', 'cliente_id' => 2]);
        Pedido::create(['fecha_pedido' => '2025-01-15', 'estado' => 'Pendiente', 'cliente_id' => 3]);
    }
}
