<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombreProveedor');
            $table->string('apellidoProveedor');
            $table->string('nombreEmpresa');
            $table->string('descripcion');
            $table->string('numTelProveedor');
            $table->string('numTelEmpresa');
            $table->string('direccionEmpresa');
            $table->string('correoEmpresa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedors');
    }
}
