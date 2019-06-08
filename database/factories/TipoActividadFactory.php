<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\TipoActividad::class, function (Faker $faker) {
    return [

      
        'nombre' => $faker->text(128),
        'cantidadMaxima'=> rand(1,5),
        'duracion' => rand(1,2),
        'organizacionExterna' => $faker->boolean(),
        
    ];
});
