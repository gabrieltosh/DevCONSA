<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('ci');
            $table->string('telefono');
            $table->string('cargo');
            $table->date('nacimiento');
            $table->string('genero');
            $table->string('email')->unique();
            $table->string('direccion');
            $table->string('password')->nullable();
            $table->enum('tipo',['gerente','administrador','empleado']);
            $table->string('imagen');
            $table->boolean('activo');
            $table->unsignedInteger('maquinaria_id')->nullable();
            $table->foreign('maquinaria_id')->references('id')->on('maquinarias');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
