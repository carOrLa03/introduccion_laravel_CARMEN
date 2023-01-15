<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usuarios_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<=5; $i++){
            $nombres=array('manolo', 'carmen', 'emilio', 'enedina', 'mina', 'maria', 'andrea', 'noemi', 'ximo', 'joaquin', 'pepe', 'jose', 'esther', 'marisa', 'moises');
            $indice = rand(0,sizeof($nombres));
            DB::table('usuarios')->insert(['nombre'=>$nombres[$indice], 'edad'=>rand(0,100)]);
        }

    }
}
