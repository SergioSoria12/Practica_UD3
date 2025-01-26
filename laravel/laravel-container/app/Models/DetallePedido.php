<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    use HasFactory;

    protected $table = 'detalles_pedidos';

    protected $fillable = ['pedido_id', 'pieza_id', 'coche_id', 'cantidad'];

    //Relacion de muchos a 1 con Pedido
    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }

    //Relacion de muchos a 1 con Pieza
    public function pieza()
    {
        return $this->belongsTo(Pieza::class);
    }

    //Relacion de muchos a 1 con Coche
    public function coche()
    {
        return $this->belongsTo(Coche::class);
    }
}
