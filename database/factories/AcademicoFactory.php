<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Academico::class, function (Faker $faker) {

    $title = $faker->sentence(10);

    return [
        'rut'=> $title,
        'nombre'=> $title,
        'correo' => $faker->unique()->safeEmail,

        
    ];
});
