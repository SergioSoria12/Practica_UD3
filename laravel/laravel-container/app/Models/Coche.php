<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    use HasFactory;

    protected $table = 'coches';

    protected $fillable = ['matricula', 'marca', 'modelo', 'cliente_id'];

    // Relacion muchos a 1 con Clientes
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    // Relacion 1 a muchos con Clientes
    public function detallesPedidos()
    {
        return $this->hasMany(DetallePedido::class);
    }
}
