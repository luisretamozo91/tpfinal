<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipoDocenteMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipoDocente_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipoDocente_id')->unsigned();
            $table->integer('menu_id')->unsigned();
            $table->timestamps();

            $table->foreign('tipoDocente_id')
                  ->references('id')->on('tipoDocente')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('menu_id')
                  ->references('id')->on('menu')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipoDocente_menu');
    }
}
