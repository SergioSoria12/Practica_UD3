<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ClienteSeeder::class,
            CocheSeeder::class,
            PedidoSeeder::class,
            PiezaSeeder::class,
            DetallePedidoSeeder::class,
        ]);
    }
}
