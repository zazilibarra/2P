<?php

use Illuminate\Database\Seeder;

class SeederCliente extends Seeder
{
    public function run()
    {
        DB::table('cliente')->insert([
            'nombre' => "Daniel Torres",
            'direccion' => "Nereo 800",
        ]);
        DB::table('cliente')->insert([
            'nombre' => "Esaú Alvarez",
            'direccion' => "Cerro Blanco 180",
        ]);
    }
}
