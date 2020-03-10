<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    protected $table='pedidos';
    protected $fillable = [
        'idCliente','total'
    ];
}
