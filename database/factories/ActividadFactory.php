<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Actividad::class, function (Faker $faker) {
    return [
        'nombre_actividad' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'archivo' => [
            "nombre_archivo" => $faker->name,
            "tipo_archivo" => $faker->mimeType,
            "extension" => $faker->fileExtension,
            "ruta" => $faker->url
        ], // aqui se genera el Json Archivo //
        "categoria" => $faker->domainWord,
        "tiempo" => $faker->randomDigitNotNull,
        "orden" => $faker->randomDigitNotNull,
        "clase_id" => function(){
            return factory(App\Models\Clase::class)->create()->id;
        }, // cuando se crean las clases se generan la ID de las actividades//
        "estado" => rand(0,1)
    ];
});
