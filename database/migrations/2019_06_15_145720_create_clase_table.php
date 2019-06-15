<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('clase', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 50);
            $table->bigInteger('idProfesor')->unsigned();;
            $table->bigInteger('idAlumno')->unsigned();;
            $table->date('fecha');
            $table->time('hora');
            $table->bigInteger('idAula')->unsigned();;
            $table->foreign('idProfesor')->references('id')->on('persona');
            $table->foreign('idAlumno')->references('id')->on('persona');
            $table->foreign('idAula')->references('id')->on('aula');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('clase');
        Schema::enableForeignKeyConstraints();
    }
}
