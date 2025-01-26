<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    public function run()
    {
        Cliente::create(['nombre' => 'Juan Pérez', 'telefono' => '600123456', 'email' => 'juan@example.com']);
        Cliente::create(['nombre' => 'Ana Gómez', 'telefono' => '600654321', 'email' => 'ana@example.com']);
        Cliente::create(['nombre' => 'Pedro López', 'telefono' => '600789123', 'email' => 'pedro@example.com']);
    }
}
