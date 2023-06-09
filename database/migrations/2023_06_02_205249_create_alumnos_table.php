<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('apellido');
            $table->string('nombre');
            $table->integer('dni');
            $table->date('fecha_nacimiento');
            $table->integer('telefono');
            $table->string('email');
            $table->string('direccion');
            $table->string('piso');
            $table->string('depto');
            $table->integer('calleAltura'); 
            $table->string('barrio');
            $table->string('localidad');
            $table->string('provincia');
            $table->integer('codigoPostal');
            $table->date('fechaAlta');
            $table->date('fechaBaja');            
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
};
