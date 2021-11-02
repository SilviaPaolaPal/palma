<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ClienteProducto;
use Faker\Generator as Faker;

$factory->define(ClienteProducto::class, function (Faker $faker) {
    return [
        'id_cliente' => $this -> faker -> numberBetween($min = 1,$max = 500),
        'id_producto' => $this -> faker -> numberBetween($min = 1,$max = 500),
        'cantidadProductoComprado' => $this -> faker -> numerify('###'),
    
    ];
});
