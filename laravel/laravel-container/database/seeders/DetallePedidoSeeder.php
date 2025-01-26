<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DetallePedido;

class DetallePedidoSeeder extends Seeder
{
    public function run()
    {
        DetallePedido::create(['pedido_id' => 1, 'pieza_id' => 1, 'coche_id' => 1, 'cantidad' => 2]);
        DetallePedido::create(['pedido_id' => 2, 'pieza_id' => 2, 'coche_id' => 2, 'cantidad' => 1]);
        DetallePedido::create(['pedido_id' => 3, 'pieza_id' => 3, 'coche_id' => 3, 'cantidad' => 1]);
    }
}
