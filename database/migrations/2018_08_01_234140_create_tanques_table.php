<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTanquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanques', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre');
            $table->string('capacidad');
            $table->string('total');
            $table->unsignedInteger('proyecto_id');
            $table->unsignedInteger('combustible_id');
            $table->foreign('combustible_id')->references('id')->on('combustibles');
            $table->foreign('proyecto_id')->references('id')->on('proyectos');
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
        Schema::dropIfExists('tanques');
    }
}
