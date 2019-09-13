<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Clase::class, function (Faker $faker) {
    return [
        'nombre_clase' => $faker->word,
        'orden' => $faker->randomDigitNotNull,
        'horario' => $faker->time($format = 'H:i:s', $max = 'now'),
        'curso_id' => rand(1,10),
        'estado' => rand(0,1)
    ];
});