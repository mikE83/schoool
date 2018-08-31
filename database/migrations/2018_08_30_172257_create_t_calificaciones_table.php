<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTCalificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_calificaciones', function (Blueprint $table) {
            $table->increments('id_t_calificaciones');
            $table->unsignedInteger('id_t_materias');
            $table->unsignedInteger('id_t_usuarios');
            $table->decimal('calificacion', 10, 2);
            $table->foreign('id_t_materias')->references('id_t_materias')->on('t_materias');
            $table->foreign('id_t_usuarios')->references('id_t_usuarios')->on('t_alumnos');
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
        Schema::dropIfExists('t_calificaciones');
    }
}
