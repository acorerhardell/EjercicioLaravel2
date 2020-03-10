<?php

use Illuminate\Database\Seeder;

class SeederPastel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pastel')->insert([
            'nombre'=> "Tres Leches",
            'sabor'=> "Vainilla",
            'precio'=> 320,
        ]);
    }
}
