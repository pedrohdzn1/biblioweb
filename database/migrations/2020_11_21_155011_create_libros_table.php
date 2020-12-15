<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('id');
            //tabla -> tipo ('nombre del campo en la base de datos')
            $table->string('titulo');
            $table->string('autor');
            $table->string('descripcion');
            $table->string('genero');
            $table->string('id_donante');
            $table->string('telefono');
            $table->string('habilitado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
