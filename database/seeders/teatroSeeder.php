<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class teatroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('teatros')->insert([
            [
                'Nombre' =>'La Abadia',
                'Direccion' =>'C/Fernandez de los Rios,42 CP 28015, Madrid España'
            ],
            [
                'Nombre' =>'Teatro Alfil',
                'Direccion' =>'Calle Pez 10 CP 28004, Madrid España'
            ],
            [
                'Nombre' =>'Teatro Alhambra',
                'Direccion' =>'C/ Molinos, 56 CP 18009 Granada'
            ],
            [
                'Nombre' =>'Teatro Principal Antzokia',
                'Direccion' =>'C/ San Prudencio 29 CP 01005 Victoria Gasteiz'
            ],
            [
                'Nombre' =>'Teatro Arbole',
                'Direccion' =>'Parque del Agua Luis Buñuel Paseo del Botanico 5 CP 50018 Zaragoza España'
            ],
            [
                'Nombre' =>'Teatro Arniches',
                'Direccion' =>'Placa de Ajuntament 17 CP 46002 Valencia'
            ],
            [
                'Nombre' =>'Teatro del Barrio',
                'Direccion' =>'C/ Zurita 20 CP 29012 Madrid'
            ],
            [
                'Nombre' =>'Teatro Bellas Aartes',
                'Direccion' =>'C/Marques de Casa Riera 2 CP 28014 Madrid'
            ],
            [
                'Nombre' =>'Teatro Beñat Etxepare',
                'Direccion' =>'Plaza Zuberoa 1 CP 01002 Vitoria Gasteiz'
            ],
        ]);
    }
}
