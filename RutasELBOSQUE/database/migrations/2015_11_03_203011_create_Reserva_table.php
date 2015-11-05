<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('"Reserva"', function (Blueprint $table) {
            $table->increments('idReserva');
            $table->integer('idRutaHorario');
            $table->boolean('activa');
            $table->integer('idPasajero');
            $table->timestamp('timeStamp');
            $table->Paradero('puntoParadero');
            $table->boolean('cancelada');

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
        Schema::drop('"Reserva"');
    }
}
