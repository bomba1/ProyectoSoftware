<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\TrabajoTitulacion::class, function (Faker $faker) {
    return [

        'actividad_titulacion_id' => rand(1,3),
        'comision_id' => rand(1,10),
        'nombre' => $faker->text(20),
        'semestreInsc' => $faker->randomElement(['1','2']),
        'añoInsc' => $faker->year,
        'FechaInicio' => $faker->date,
        'FechaTermino' => $faker->date,
        'estado' => $faker->randomElement(['INGRESADA','ACEPTADA','FINALIZADA','ANULADA']),
        
    ];
});
