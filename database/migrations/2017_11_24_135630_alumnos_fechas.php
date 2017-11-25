<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlumnosFechas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos_fechas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumno_id');
            $table->integer('fecha_id');
            $table->char('asistencia');//p=presente, i=inasistencia, j=justificado
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
        Schema::dropIfExists('alumnos_fechas');
    }
}
