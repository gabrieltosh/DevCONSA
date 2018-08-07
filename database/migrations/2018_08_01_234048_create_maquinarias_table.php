<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaquinariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maquinarias', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('imagen');
            $table->string('placa')->nullable();
            $table->string('modelo');
            $table->string('color');
            $table->string('marca');
            $table->string('kilometraje')->nullable();
            $table->string('capacidad')->nullable();
            $table->string('detalle')->nullable();
            $table->string('estado')->nullable();
            $table->boolean('activo');
            $table->enum('tipo',['alquilado','propio']);
            $table->unsignedInteger('combustible_id');
            $table->foreign('combustible_id')->references('id')->on('combustibles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maquinarias');
    }
}
