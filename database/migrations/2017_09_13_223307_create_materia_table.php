<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriaTable extends Migration {

    public function up()
    {
        Schema::create('profesor', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('materia', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->integer('n_cupos')->unsigned();
            $table->integer('id_profesor')->unsigned();
            $table->integer('id_usuario')->unsigned();
            $table->timestamps();

            $table->foreign('id_profesor')->references('id')->on('profesor')->onDelete('cascade');
            $table->foreign('id_usuario')->references('id')->on('usuario')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::drop('materia');
        Schema::drop('profesor');
    }

}