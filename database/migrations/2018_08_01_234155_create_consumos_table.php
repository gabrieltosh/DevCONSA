<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('kilometraje');
            $table->string('cantidad');
            $table->string('administrador_id');
            $table->unsignedInteger('usuario_id');
            $table->unsignedInteger('tanque_id');
            $table->unsignedInteger('proyecto_id');
            $table->foreign('proyecto_id')->references('id')->on('proyectos');
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('tanque_id')->references('id')->on('tanques');
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
        Schema::dropIfExists('consumos');
    }
}
