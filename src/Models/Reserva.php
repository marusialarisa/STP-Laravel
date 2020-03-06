<?php


namespace Rentit\Models;


namespace Rentit\Models;

use Rentit\Models\Login;
use Rentit\Models\Sala;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model as Eloquent;
//class Reserva extends Model
class Reserva extends Eloquent
{
    protected $table='reserva';
    protected $fillable=['idusuario','idsala','fecha_hora_inicio','fecha_hora_fin','descripcion'];

    public function login(){
        return $this->belongsTo('Rentit\Models\Login');
    }

    public function salas(){
        return $this->belongsTo('Rentit\Models\Salas');
    }

}