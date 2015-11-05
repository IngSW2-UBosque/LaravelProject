<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRutaHorarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RutaHorario', function (Blueprint $table) {
            $table->increments('idRuta');
            $table->integer('idBus');
            $table->date('horario');
            $table->integer('idConductor');
            $table ->integer('disponibiidad');
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
        Schema::drop('RutaHorario');
    }
}
