<?php


namespace Rentit\Controllers;

use Rentit\Models\Sala;
use ¶entit\Models\Salas;
use Rentit\Models\Database;
use Rentit\Controller;
new Database();
class SalasController extends Controller
{
    public function __construct($request)
    {
        parent::__construct($request);


    }

    public function index()

    {
        $data = ['title' => 'Selecciona Sala:',];

        $this->render($data);

        function error() { throw new \Exception("[ERROR::]:Non existent method"); }
    }

/*
    public function create_salas($nombre_sala,$responsable,$idsede){
        $sala=Sala::create([
            'nombre_sala'=>$nombre_sala,
            'responsable'=>$responsable,
            'idsede'=>$idsede]);

        return $sala;
}

    public function salas(){


    }
*/


    public function logIn(){
        var_dump($_POST);
    }
}