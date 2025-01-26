<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = ['nombre', 'telefono', 'email'];

    //Relacion de 1 a muchos con Coches
    public function coches()
    {
        return $this->hasMany(Coche::class);
    }

    //Relacion de 1 a muchos con Pedidos
    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
