<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombreProducto' => $this -> faker -> name(),
        'precioCompra' => $this -> faker -> numerify('###.##'),
        'precioVenta' => $this -> faker -> numerify('###.##'),
        'cantidadProducto' => $this -> faker -> numerify('#####'),
        'tipoProducto' => $this -> faker -> text(15),
        'id_proveedor' => $this -> faker -> numberBetween($min = 1,$max = 500),
        
    ];
});
