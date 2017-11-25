<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'lastname' => $faker->lastname,
        'dni' => 11111111,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10), 
    ];
});

$factory->define(App\Alumno::class, function (Faker $faker) {

    return [
        'nombre' => $faker->name,
        'apellido' => $faker->lastname,
        'dni' => 11111111,
        'fechaNacimiento' => $faker->date(),
        'lugarNacimiento' => "aguaray",
        'sexo' => 'v',
        'nacionalidad' => "argentino",
        'domicilio' => $faker->streetAddress,
        'repitente' => 1,
        'grado_id' => 1,
    ];
});
