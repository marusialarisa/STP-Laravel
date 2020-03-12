<?php


namespace Rentit\Controllers;


use Rentit\Controller;
use Rentit\Models\Database;

use Rentit\Models\Reserva;
new Database();
class EstadoController extends Controller
{
    public function __construct($request)
    {
        parent::__construct($request);


    }

    public function index()

    {
        $data = ['title' => 'Sala Cloud, Edificio Canada', 'nuevelunes' => 'lunes'];
        //  $data['nuevelunes']=$this->cargaDatos();

        $this->render($data);

        function error()
        {
            throw new \Exception("[ERROR::]:Non existent method");
        }
    }


    public function consultar(){

        $horastotales=[['9-10','2020-03-02 09:00:00','2020-03-03 09:00:00','2020-03-04 09:00:00','2020-03-05 09:00:00','2020-03-06 09:00:00','2020-03-07 09:00:00','2020-03-08 09:00:00'],
            ['10-11','2020-03-02 10:00:00','2020-03-03 10:00:00','2020-03-04 10:00:00','2020-03-05 10:00:00','2020-03-06 10:00:00','2020-03-07 10:00:00','2020-03-08 10:00:00']
        ];




             foreach ($horastotales as $fila) {
                 echo '<table><tr>';
                 foreach ($fila as $fecha) {
                     // echo '<td>' . $fecha . '</br></td>';


                     //    $dsn='mysql:host=localhost;dbname=salas';
                     $usuario = "root";
                     $contrasena = "linuxlinux";
                     $servidor = 'localhost';
                     $db = "salas";
                     /*  try{
                           $dbcon=new PDO($dsn,$usuario,$contrasena);
                       }catch (PDOException $e){
                           echo "Fallo la conexion: ".$e->getMessage();
                       }

                       $datos=$dbcon->prepare("SELECT * FROM users");
                      $datos->bindParam(':username',$usuario); //el parametro user equivale a user
                      $datos->bindParam(':password',$contrasena);
                       $datos->execute();

                       $result=$datos->setFechMode(PDO::FETCH_ASSOC);
                       echo "table border=1><tr><th>Dia</th></tr>";

                       while ($row=$datos->fetch()){
                           echo "<tr><td>".$row['username']."</td></tr>";
                       }
                       echo "</table"; */


                        $conexion = mysqli_connect($servidor, $usuario, $contrasena);
                         $basedatos = mysqli_select_db($conexion, $db);
                       $consulta="SELECT * FROM reserva";

                     //   $consulta = "SELECT * FROM `reserva` WHERE fecha_hora_inicio =:fecha_hora_inicio";

                         // $consulta = "SELECT * FROM `reserva` WHERE fecha_hora_inicio =STR_TO_DATE('2020-03-05 10:00:00', '%Y-%m-%d %H:%i:%s')";


                        // $consulta = "SELECT * FROM `reserva` WHERE fecha_hora_inicio <=STR_TO_DATE('2020-03-04 09:20:00', '%Y-%m-%d %H:%i:%s') and fecha_hora_fin >=STR_TO_DATE('2020-03-04 09:00:00', '%Y-%m-%d %H:%i:%s') ";

                         $resultado = mysqli_query($conexion, $consulta);


                         //   echo '<td>'.$hora.'</td>';


                         while ($columna = mysqli_fetch_array($resultado)) {


                                 $fechaini = $columna['fecha_hora_inicio'];


                                 $hora_nueve = '9-10';
                                 $hora_diez = '10-11';

                                 if ($fechaini == $fecha) {

                                     echo "<td style='background-color:red'>" . $fecha . "</td>";
                                 }

                         }

                     if ($hora_nueve == $fecha) {
                         echo "<td style='background-color:lightblue'>9-10</td>";
                     } else
                         if ($hora_diez == $fecha) {
                             echo "<td style='background-color:lightblue'>10-11</td>";
                         } else if ($fechaini != $fecha) {

                             echo "<td style='background-color:green'>Disponible</td>";
                         }

                 }

                 echo '</tr></table>';
             }
    }


  /*  public function consultaDiaHora( pHora ){


        $usuario = "root";
        $contrasena = "linuxlinux";
        $servidor = 'localhost';
        $db = "salas";

        $conexion = mysqli_connect($servidor, $usuario, $contrasena);
        $basedatos = mysqli_select_db($conexion, $db);
        $consulta="SELECT * FROM reserva";

        $resultado = mysqli_query($conexion, $consulta);


            while ($columna = mysqli_fetch_array($resultado)) {

                var_dump($columna['fecha_hora_inicio']);
            }
    } */


    public function logIn(){
        var_dump($_POST);
    }
}