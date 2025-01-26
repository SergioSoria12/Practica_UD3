<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coche;

class CocheSeeder extends Seeder
{
    public function run()
    {
        Coche::create(['matricula' => '1234ABC', 'marca' => 'Toyota', 'modelo' => 'Corolla', 'cliente_id' => 1]);
        Coche::create(['matricula' => '5678DEF', 'marca' => 'Honda', 'modelo' => 'Civic', 'cliente_id' => 2]);
        Coche::create(['matricula' => '9101GHI', 'marca' => 'Ford', 'modelo' => 'Focus', 'cliente_id' => 3]);
    }
}
