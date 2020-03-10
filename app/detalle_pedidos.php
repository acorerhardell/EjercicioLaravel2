<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_pedidos extends Model
{
    protected $table='detalle_pedidos';
    protected $fillable = [
        'idPastel','idPedido','cantidad','subtotal'
    ];
}
