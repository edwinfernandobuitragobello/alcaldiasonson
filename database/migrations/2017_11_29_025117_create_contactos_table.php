<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('direccion_contactos')->nullable();
            $table->string('telefono_contactos')->nullable();
            $table->string('correo_contactos')->nullable();
            $table->string('horario_contactos')->nullable();
            $table->string('latitud_contactos')->nullable();
            $table->string('logitud_contactos')->nullable();
            $table->string('facebook_contactos')->nullable();
            $table->string('twitter_contactos')->nullable();
            $table->string('youtube_contactos')->nullable();
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
        Schema::dropIfExists('contactos');
    }
}
