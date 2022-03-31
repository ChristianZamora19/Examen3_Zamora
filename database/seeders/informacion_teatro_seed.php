<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class informacion_teatro_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $id =["1","2","3","4","5","6","7","8","9"];
        $Nombre =["La Abadia", "Teatro Alfil", "Teatro Alhambra", "Teatro Principal Antzokia", "Teatro Arbole", "Teatro Arniches", "Teatro del Barrio", "Teatro Bellas Aartes", "Teatro Beñat Etxepare"];
        $Direccion = ["C/Fernandez de los Rios,42 CP 28015, Madrid España", "Calle Pez 10 CP 28004, Madrid España", "C/ Molinos, 56 CP 18009 Granada","C/ San Prudencio 29 CP 01005 Victoria Gasteiz", "Parque del Agua Luis Buñuel Paseo del Botanico 5 CP 50018 Zaragoza España", "Placa de Ajuntament 17 CP 46002 Valencia","C/ Zurita 20 CP 29012 Madrid", "C/Marques de Casa Riera 2 CP 28014 Madrid", "Plaza Zuberoa 1 CP 01002 Vitoria Gasteiz"];
        
        DB::table('teatros')->insert([
            'id'=> $id,
            'Nombre'=> $Nombre,
            'Director'=> $Direccion
        ]);
    }
}
