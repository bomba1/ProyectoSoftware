<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Comision::class, function (Faker $faker) {

    $title = $faker->sentence(6);

    return [

        'nombreOrganizacion' => $title,
        'tutorEmpresa' => $faker->text(15),
        
    ];
});
