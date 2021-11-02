<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'nombre' => $this -> faker -> name(),
        'apellido' => $this -> faker -> name(),
        'identidad' => $this -> faker -> numerify('#############'),
        'telefono' => $this -> faker -> numerify('########'),
        'direccion' => $this -> faker -> text(50),
    ];
});
