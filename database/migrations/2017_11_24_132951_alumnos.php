<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->bigInteger('dni');
            $table->date('fechaNacimiento');
            $table->string('lugarNacimiento'); //lugar de nacimiento
            $table->char('sexo');
            $table->string('nacionalidad');
            $table->string('domicilio');
            $table->smallInteger('repitente');
            $table->integer('grado_id');
            $table->boolean('estado')->default(true);
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
        Schema::dropIfExists('alumnos');
    }
}
