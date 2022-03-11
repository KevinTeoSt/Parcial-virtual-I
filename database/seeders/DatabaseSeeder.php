<?php

namespace Database\Seeders;

use App\Models\Alumnos;
use App\Models\Categorias;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       # Categorias::factory(20)->create();
        Alumnos::factory(20)->create();
    }
}
