<?php

use Illuminate\Database\Seeder;

class SeederPedido extends Seeder
{
    public function run()
    {
        DB::table('pedido')->insert([
            'idcliente' => 1,
            'total' => 240
        ]);
        DB::table('pedido')->insert([
            'idcliente' => 2,
            'total' => 140
        ]);
        DB::table('pedido')->insert([
            'idcliente' => 1,
            'total' => 200
        ]);
    }
}
