<?php


namespace Rentit\Controllers;


use Illuminate\Support\Facades\DB;
use Rentit\Controller;
use Rentit\Models\Database;
use Rentit\Models\Registrar;
use Rentit\Models\Reserva;
use Rentit\Models\Salas;

new Database();
class ReservaController extends Controller
{
    public function __construct($request)
    {
        parent::__construct($request);


    }

    public function index()

    {
        $data = ['title' => 'NUEVA RESERVA',];

        $this->render($data);

        function error() { throw new \Exception("[ERROR::]:Non existent method"); }
    }


    public function create_reserva($fecha_hora_inicio,$fecha_hora_fin,$descripcion,$iduser,$idsala)
    {
        $iduser=Registrar::value('id');

        $idsala=Salas::value('idsala');
        $reserva = Reserva::create([
            'fecha_hora_inicio' => $fecha_hora_inicio,
            'fecha_hora_fin' => $fecha_hora_fin,
            'descripcion' => $descripcion,
            'idusuario'=>$iduser,
           'idsala'=>$idsala
        ]);

        return $reserva;

    }


    public function reserva(){

        if (!empty($_REQUEST['fecha_hora_inicio']) &&
            !empty($_REQUEST['fecha_hora_fin']) &&
            !empty($_REQUEST['descripcion'])

        ) {

            //    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
                $fecha_inicio = filter_input(INPUT_POST, 'fecha_hora_inicio', FILTER_SANITIZE_STRING);
                $fecha_fin = filter_input(INPUT_POST, 'fecha_hora_fin', FILTER_SANITIZE_STRING);
                $desc = filter_input(INPUT_POST, 'descripcion', FILTER_SANITIZE_STRING);
                $iduser = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
                $idsala = filter_input(INPUT_POST, 'idsala', FILTER_SANITIZE_NUMBER_INT);

            session_id($iduser);
         // $iduser=Registrar::get('username',$username);
            $iduser=Registrar::get('id',$iduser);
            //var_dump($iduser);die;


            $reservar = $this->create_reserva($fecha_inicio, $fecha_fin, $desc,$iduser,$idsala);


//                  $reservar= Reserva::get('idusuario', $iduser);
  //               $reservar->save();

                    header('location:/estado');

        }else {
            $this->error("Fill the form");
        }


    }

    public function logIn(){
        var_dump($_POST);
    }
}