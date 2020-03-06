<?php


namespace Rentit\Models;

use Rentit\Models\Sala;
use Illuminate\Database\Eloquent\Model as Eloquent;
//use Illuminate\Database\Eloquent\Model;
//class Sede extends Model
class Sede extends Eloquent
{
    protected $table='sede';
    protected $fillable=['nombre_sede'];

    public  function salas(){
        return $this->hasMany('Rentit\Models\Salas');
    }
}