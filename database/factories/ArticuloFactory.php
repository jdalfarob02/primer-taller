<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Articulo;
use Faker\Generator as Faker;

$factory->define(Articulo::class, function (Faker $faker) {
    return [
        'articulo' => $faker->unique()->randomElement(['anillo','pulsera','cadenas','aretes','piercing'])


    ];
});
