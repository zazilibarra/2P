<?php

use Illuminate\Database\Seeder;

class SeederDetallePedido extends Seeder
{
    public function run()
    {
        DB::table('detallepedido')->insert([
            'idpedido' => 1,
            'idpastel' => 1,
            'cantidad' => 2,
            'subtotal' => 240
        ]);
        DB::table('detallepedido')->insert([
            'idpedido' => 2,
            'idpastel' => 2,
            'cantidad' => 1,
            'subtotal' => 140
        ]);
        DB::table('detallepedido')->insert([
            'idpedido' => 3,
            'idpastel' => 1,
            'cantidad' => 1,
            'subtotal' => 120
        ]);
        DB::table('detallepedido')->insert([
            'idpedido' => 3,
            'idpastel' => 3,
            'cantidad' => 1,
            'subtotal' => 80
        ]);
    }
}
