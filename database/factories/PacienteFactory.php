<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Paciente;
use Faker\Generator as Faker;

$factory->define(Paciente::class, function (Faker $faker) {
    return [
      'nombre' => $faker->name,
      'apellido' => $faker->lastName,
      'edad' => $faker->numberBetween($min = 1, $max = 80),
      'sexo' => $faker->randomElement(['masculino','femenino','sin definir']),
      'historia_clinica' => $faker->paragraph,
      'telefono' => $faker->randomNumber($nbDigits = NULL, $strict = false),
      'email' => $faker->unique()->safeEmail,
      'medico_id' => App\Medico::inRandomOrder()->value('id'),
    ];
});
