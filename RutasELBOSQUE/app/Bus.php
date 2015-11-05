<?php
/**
 * Created by PhpStorm.
 * User: Esteban
 * Date: 29/10/2015
 * Time: 08:31 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
protected $table = 'bus';
    protected $fillable = ['idBus', 'placa', 'capacidad'];
}