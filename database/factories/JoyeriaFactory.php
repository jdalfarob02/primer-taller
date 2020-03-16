<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Joyeria;
use App\Models\Articulo;
use Faker\Generator as Faker;

$factory->define(Joyeria::class, function (Faker $faker) {
    return [
        'articulo_id' =>Articulo::inRandomOrder()->value('id'),
        'precio' => $faker->randomElement(['150000','45000','296000','890000','10000000']),
        'descripcion' =>[
            "size" => $faker->randomElement(['exportado desde francia','exportado de italia','exportado de holanda','exportado de wakanda','exportado de repubica dominicana']),
            "size" => $faker->randomElement(['diamantina 100% oro','diamantes incriustados','100% oro puro con escarchado de diamantes','lagrimas creadas a base de oro','punto de oro y punto de diamante'])
             
        ],

    ];
});
