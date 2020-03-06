<?php


namespace Rentit\Models;

use Rentit\Models\Reserva;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model as Eloquent;

//class Registrar extends Model
class Registrar extends Eloquent
{

    protected $table='users';
    protected $fillable=['username','password'];

    public  function reservas(){
        return $this->hasMany('Rentit\Models\Reserva');
    }





}