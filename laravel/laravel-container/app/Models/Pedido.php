<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedidos';

    protected $fillable = ['fecha_pedido', 'estado', 'cliente_id'];

    //Relacion de muchos a 1 con Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    //Relacion de 1 a muchos con Detalle_Pedido
    public function detallesPedidos()
    {
        return $this->hasMany(DetallePedido::class);
    }
}

