<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Carrera::class, function (Faker $faker) {
    return [
        'nombre_carrera'=>$faker->randomElement(['ICCIV','ICCIN','IECI','IENCI']),
    ];
});
