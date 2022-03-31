<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class informacion_obras_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       /* $id =["1","2","3","4","5","6","7","8","9"];
        $Nombre = ["Ubú sin cuernos", "Juego de niñas", "La condesa Sancha", "La memoria de los chimpancés", "Neveras", "Las Pulgas de Oxana", "Ser un Hombre", "Billete de IDA", "La ventana Abierta"];
        $Director = ["Abel Gonzalez Melo", "Adrian Novella", "Aizpea Goenaga", "Africa Hurtado", "Alda Lozano", "Aldana Lozano", "Alejandro Butron", "Amala Fernandez", "Ana Graciani"];
        */
        DB::table('obras')->insert([
            'id'=> $id =["1","2","3","4","5","6","7","8","9"],
            'Nombre'=> $Nombre = ["Ubú sin cuernos", "Juego de niñas", "La condesa Sancha", "La memoria de los chimpancés", "Neveras", "Las Pulgas de Oxana", "Ser un Hombre", "Billete de IDA", "La ventana Abierta"],
            'Director'=> $Director = ["Abel Gonzalez Melo", "Adrian Novella", "Aizpea Goenaga", "Africa Hurtado", "Alda Lozano", "Aldana Lozano", "Alejandro Butron", "Amala Fernandez", "Ana Graciani"]
        ]);
    }
}
