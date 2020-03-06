<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'cliente';

    protected $fillable = [
        'idcliente', 'total',
    ];
}
