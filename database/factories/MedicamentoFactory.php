<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Medicamento;
use Faker\Generator as Faker;

$factory->define(Medicamento::class, function (Faker $faker) {
    return [
      'nombre' => $faker->word,
      'descripcion' => $faker->paragraph,
      'serial' => $faker->randomNumber($nbDigits = NULL, $strict = false),
    ];
});
