<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    protected $table = 'Conductor';
    protected $fillable = ['idConductor', 'nombre', '','idConductor', 'disponibilidad'];
}
