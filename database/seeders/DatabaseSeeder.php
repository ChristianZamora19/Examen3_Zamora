<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\teatroSeeder;
use Database\Seeders\obraSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(informacion_teatro_seed::class);
        $this->call(informacion_obras_seed::class);
        $this->call(teatroSeeder::class);
        $this->call(obraSeeder::class);
        
    }
}
