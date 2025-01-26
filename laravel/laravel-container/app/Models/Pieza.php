<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pieza extends Model
{
    use HasFactory;

    protected $table = 'piezas';

    protected $fillable = ['nombre', 'precio', 'stock'];

    //Relacion de 1 a muchos con Detalles_Pedidos
    public function detallesPedidos()
    {
        return $this->hasMany(DetallePedido::class);
    }
}
