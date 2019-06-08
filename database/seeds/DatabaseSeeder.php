<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(AcademicosTableSeeder::class);
        $this->call(CarrerasTableSeeder::class);
        $this->call(ComisionsTableSeeder::class);
        $this->call(EstudiantesTableSeeder::class);
        $this->call(TipoActividadsTableSeeder::class);
        $this->call(TrabajoTitulacionsTableSeeder::class);

    }
}
