<?php



namespace Rentit\Models;

use Rentit\Models\Reserva;
use Illuminate\Database\Eloquent\Model as Eloquent;
//use Illuminate\Database\Eloquent\Model;
class Salas extends Eloquent
//class Sala extends Model
{
    protected $table='sala';
    protected $fillable=['idsala','nombre_sala','responsable','idsede'];

    public  function reservas(){
        return $this->hasMany('Rentit\Models\Reserva');
    }
}