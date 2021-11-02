<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombreProducto');
            $table->decimal('precioCompra');
            $table->decimal('precioVenta');
            $table->integer('cantidadProducto');
            $table->string('tipoProducto');
            $table->unsignedBigInteger('id_proveedor');

            $table->foreign('id_proveedor')->references('id')->on('proveedors')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
