<?php

use Illuminate\Database\Seeder;

class SeederCliente extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cliente')->insert([
            'nombre'=> "Tres Leches",
            'sabor'=> "Vainilla",
            'precio'=> 320,
        ]);
    }
}
