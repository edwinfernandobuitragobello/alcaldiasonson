<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNosotrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nosotros', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('quienes_nosotros')->nullable();
            $table->longText('mision_nosotros')->nullable();
            $table->longText('vision_nosotros')->nullable();
            $table->string('imagen_uno_nosotros')->nullable();
            $table->string('imagen_dos_nosotros')->nullable();

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
        Schema::dropIfExists('nosotros');
    }
}
