<?php

use Faker\Generator as Faker;

$factory->define(App\Paquete::class, function (Faker $faker) {
    return [
        'Peso' => $faker->randomDigit,
        'Estado' => $faker->sentence,
        'Direccion_Remitente' => $faker->sentence,
        'Nombre_Remitente' => $faker->sentence,
        'NDocumento' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'Direccion_Llegada' => $faker->sentence,
        'Nombre_Remitido' => $faker->sentence


    ];
});
