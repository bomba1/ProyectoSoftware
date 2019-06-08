<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Estudiante::class, function (Faker $faker) {



    return [
        
        'rut' => $faker->unique()->text(15),
        'nombre' => $faker->text(20),
        'correo' => $faker->unique()->safeEmail,
        'fono' => rand(00000000,99999999),

    ];
});
