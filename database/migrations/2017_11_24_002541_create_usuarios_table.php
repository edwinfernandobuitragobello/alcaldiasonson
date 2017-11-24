<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_uno_usuario')->nullable();
            $table->string('nombre_dos_usuario')->nullable();
            $table->string('apellido_uno_usuario')->nullable();
            $table->string('apellido_dos_usuario')->nullable();
            $table->string('cedula_usuario')->nullable();
            $table->string('catastro_usuario')->nullable();
            $table->string('direccion_usuario')->nullable();
            $table->string('telefono_usuario')->nullable();
            $table->string('correo_usuario')->nullable();
            $table->string('contrasena')->nullable();
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
        Schema::dropIfExists('usuarios');
    }
}
