<?php

use Illuminate\Database\Seeder;

class TrabajoTitulacionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        factory(App\TrabajoTitulacion::class, 25)->create()->each(function(App\TrabajoTitulacion $trabajo_titulacion){


        });
    }
}
