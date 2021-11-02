<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Proveedor;
use Faker\Generator as Faker;

$factory->define(Proveedor::class, function (Faker $faker) {
    return [
        'nombreProveedor' => $this -> faker -> name(),
        'apellidoProveedor' => $this -> faker -> name(),
        'nombreEmpresa' => $this -> faker -> name(),
        'descripcion' => $this -> faker -> text(50),
        'numTelProveedor' => $this -> faker -> numerify('########'),
        'numTelEmpresa' => $this -> faker -> numerify('########'),
        'direccionEmpresa' => $this -> faker -> text(15),
        'correoEmpresa' => $this -> faker -> email(),
     
    ];
});
