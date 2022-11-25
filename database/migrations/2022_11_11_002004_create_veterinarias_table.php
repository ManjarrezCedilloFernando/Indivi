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
        Schema::create('veterinarias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_completo');
            $table->string('telefono')->unique();
            $table->string('img_perfil');
            $table->string('direccion')->unique();
            $table->integer('servicios_id')->unsigned();
            $table->foreign('servicios_id')->references('id')->on('servicios');
            $table ->softdeletes();
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
        Schema::dropIfExists('veterinarias');
    }
};
