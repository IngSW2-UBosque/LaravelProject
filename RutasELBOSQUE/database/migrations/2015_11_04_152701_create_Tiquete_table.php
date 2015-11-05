<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiqueteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('"Tiquete"', function (Blueprint $table) {
            $table->integer('codigo');
            $table->date('fechaCompra');
            $table->integer('idPasajero');
            $table->date('fechaUso');
            $table->integer('idRutaHorario');
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
        Schema::drop('"Tiquete"');
    }
}
