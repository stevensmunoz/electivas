<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriaEstudianteTable extends Migration {

    public function up()
    {
        Schema::create('materia_estudiante', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_materia')->unsigned();
            $table->integer('id_estudiante')->unsigned();
            $table->timestamps();

            $table->foreign('id_estudiante')->references('id')->on('estudiante')->onDelete('cascade');
            $table->foreign('id_materia')->references('id')->on('materia')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::drop('materia_estudiante');
    }

}
