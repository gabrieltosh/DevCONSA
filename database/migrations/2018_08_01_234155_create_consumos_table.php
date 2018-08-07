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
            $table->unsignedInteger('maquinaria_id');
            $table->unsignedInteger('tanque_id');
            $table->foreign('maquinaria_id')->references('id')->on('maquinarias');
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
