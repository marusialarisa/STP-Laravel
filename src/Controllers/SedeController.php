<?php


namespace Rentit\Controllers;


use Rentit\Controller;
use Rentit\Models\Sede;

class SedeController extends Controller
{
    public function __construct($request)
    {
        parent::__construct($request);


    }

    public function index()

    {
        $data = ['title' => 'Selecciona Sede:',];

        $this->render($data);

        function error() { throw new \Exception("[ERROR::]:Non existent method"); }
    }

   /* public function create_sede($nombre_sede){
        $sede=Sede::create([
            'nombre_sede'=>$nombre_sede
        ]);
        return $sede;
    }

    public function sede(){
        if(!empty($_GET['nombre_sede'])){
            $sedes=filter_input(INPUT_POST,'nombre_sede',FILTER_SANITIZE_STRING);
        try

        }
    }*/

    public function logIn(){
        var_dump($_POST);
    }
}