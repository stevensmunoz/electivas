<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudianteTable extends Migration {

    public function up()
    {
        Schema::create('estudiante', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombre');
            $table->string('codigo', 6);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('estudiante');
    }

}
