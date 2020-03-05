<?php

use Illuminate\Database\Seeder;

class SeederPastel extends Seeder
{
    public function run()
    {
        DB::table('pastel')->insert([
            'sabor' => "Chocolate",
            'precio' => 80,
            'costo' => 120
        ]);
        DB::table('pastel')->insert([
            'sabor' => "Fresa",
            'precio' => 80,
            'costo' => 120
        ]);
        DB::table('pastel')->insert([
            'sabor' => "Vainilla",
            'precio' => 80,
            'costo' => 120
        ]);
    }
}
