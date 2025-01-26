<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pieza;

class PiezaSeeder extends Seeder
{
    public function run()
    {
        Pieza::create(['nombre' => 'Filtro de aceite', 'precio' => 25.00, 'stock' => 50]);
        Pieza::create(['nombre' => 'Pastillas de freno', 'precio' => 45.00, 'stock' => 30]);
        Pieza::create(['nombre' => 'Batería', 'precio' => 85.00, 'stock' => 10]);
    }
}