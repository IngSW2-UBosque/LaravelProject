<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RutaHorario extends Model
{
    protected $table = 'bus';
    protected $fillable = ['idRuta', 'idBus', 'horario','idConductor', 'disponibilidad'];
}
