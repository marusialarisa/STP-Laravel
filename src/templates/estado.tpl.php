<html>
<head>
<meta charset="utf-8" />
    <title>PRUEBAS PRACTICA</title>
    <style>
        *{margin: 0px; padding: 0px;}
        body		{background-color:#f9fafa;margin: 0px;}
        .container{  width: 100% ; height: 100%;  }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;

        }
        table{
            width: 90% ; height: 90%; margin-left:5%; margin-right:5%;
        }
        h5{
            posicion:absolute; text-align:right;
        }
        th{background-color:  #84aef5 ;}
        #tab{background-color:   #d7e3f7; text-align:center;}
        td{background-color:   #d7e3f7; text-align:center;}
        p{margin-left:5%;display:inline-block;}
        h5{margin-left:60%;  font-size:16px; display:inline-block;}
        a{color:black; text-decoration:none}
        .volver{margin-left:5%; width:60px; height: 30px;}
        .reserva{margin-left:35%;  width:200px; height: 30px;background-color:  #78d6f3 ;}
        #res{background-color: #ed5340 ;}
    </style>

</head>
<body>


<?php


use Rentit\Models\Reserva; ?>

<div class="container">

    <p><b>Semana:<?php
            $date=date("d/m/Y");
            $datef=date("W");


           // echo '<script>alert("hola")</script>';

            ?>
            <select name="semana">
            <?php

            $fechad=new DateTime('first Monday of this month');
            $esteMes=$fechad->format('m');
            $datef=date("W");

            while($fechad->format('m')===$esteMes ){
            //semanas anteriores
            //  echo $fechad->format('d/m/Y').PHP_EOL;
         
           $fechad->modify('next Monday');
            echo "<option>".date_format($fechad, 'd/m/Y')."</option>";
            }

            ?>
            </select>
        </b></p>
    <h5><?=$title; ?></h5>

    <table>
        <tr>
            <th>Hora</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miercoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
            <th>Sabado</th>
            <th>Domingo</th>
        </tr>



        <tr>

    <!----  <form action="/estado/consultar" method="post">
              <input type="submit" id="sub" name="submit" value="Entra"><br>
          </form> ---->

                <?php


               $horastotales=[['9-10','2020-03-02 09:00:00','2020-03-03 09:00:00','2020-03-04 09:00:00','2020-03-05 09:00:00','2020-03-06 09:00:00','2020-03-07 09:00:00','2020-03-08 09:00:00'],
                             ['10-11','2020-03-02 10:00:00','2020-03-03 10:00:00','2020-03-04 10:00:00','2020-03-05 10:00:00','2020-03-06 10:00:00','2020-03-07 10:00:00','2020-03-08 10:00:00'],
                             ['11-12','2020-03-02 11:00:00','2020-03-03 11:00:00','2020-03-04 11:00:00','2020-03-05 11:00:00','2020-03-06 11:00:00','2020-03-07 11:00:00','2020-03-08 11:00:00']

                                    ];


         //   foreach($horastotales as $fecha_ini=>$hora) {

              foreach($horastotales as $fila){
                    echo '<tr>';
                    foreach ($fila as $fecha){




                $usuario = "root";
                  $contrasena = "linuxlinux";
                  $servidor = 'localhost';
                  $db = "salas";

                  $conexion = mysqli_connect($servidor, $usuario, $contrasena);
                  $basedatos = mysqli_select_db($conexion, $db);
              $consulta="SELECT * FROM reserva";


              //  $consulta = "SELECT * FROM `reserva` WHERE fecha_hora_inicio =STR_TO_DATE('2020-03-05 10:00:00', '%Y-%m-%d %H:%i:%s')";
              //    $consulta="SELECT * FROM `reserva` WHERE fecha_hora_inicio=:fecha_hora_inicio;";

                        //   $consulta="SELECT * FROM `reserva` WHERE fecha_hora_inicio <=STR_TO_DATE('2020-03-04 09:20:00', '%Y-%m-%d %H:%i:%s') and fecha_hora_fin >=STR_TO_DATE('2020-03-04 09:00:00', '%Y-%m-%d %H:%i:%s') ";

                  //     $fechadia=$_POST['fecha_hora_inicio'];

                        $resultado = mysqli_query($conexion, $consulta);


                     //   echo '<td>'.$hora.'</td>';


                        while ($columna = mysqli_fetch_array($resultado)) {

                            $fechaini = $columna['fecha_hora_inicio'];
                            $fechafin = $columna['fecha_hora_fin'];


                            $str_hora_ini = substr($fechaini,11,2);
                            $str_hora_fin = substr($fechafin,11,2);


                            $horaNueve='09';
                            $horaDiez='10';
                            $horaOnce='11';
                            $horaDoce='12';

                            $hora_nueve = '9-10';
                            $hora_diez = '10-11';
                            $hora_once = '11-12';

                            $row_primero='rowspan';

                            $row_segundo='2';
                            $row_tercero='3';
                            $row_cuarto='4';

                            if ($fechaini == $fecha) {
                                echo "<td style='background-color:red'>" . $fechaini . "</td>";


                            }


                        }


                                if ($hora_nueve == $fecha) {
                                    echo "<th style='background-color:lightblue'>" . $hora_nueve . "</th>";
                                } else
                                    if ($hora_diez == $fecha) {
                                        echo "<th style='background-color:lightblue'>" . $hora_diez . "</th>";
                                    } else
                                        if ($hora_once == $fecha) {
                                            echo "<th style='background-color:lightblue'>" . $hora_once . "</th>";
                                        }else
                             if ($fechaini != $fecha ) {
                            echo "<td style='background-color:green'>Disp</td>";

                        }


                    }



                  echo '</tr>';

              }



                /*  while ($columna = mysqli_fetch_array($resultado)) {

                      $fechaini = $columna['fecha_hora_inicio'];

                        $hora_nueve='9-10';
                        $hora_diez='10-11';

                      if ($fechaini == $fecha) {

                      echo "<td style='background-color:red'>" . $fecha . "</td>";
                         }
                      else
                          if($hora_nueve==$fecha){
                          echo "<td style='background-color:lightblue'>9-10</td>";
                      } else
                              if($hora_diez==$fecha){
                                  echo "<td style='background-color:lightblue'>10-11</td>";
                              }

                          else if ($fechaini != $fecha) {

                            echo "<td style='background-color:green'></td>";
                          }



                  } */





                /*  $str_hora_ini = substr($fechaini, 11, 2);
    // var_dump($str_hora_ini);die;
    $str_dias = substr($fechaini, 0, 10);
    // echo $str_dias."<br>";
    $dias = array('Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado');
    $dia = $dias[date('w', strtotime($str_dias))];
  //   echo $dia . "<br>";

        $dia_semana = 'Lunes';

      // echo "<td>" . $fecha_ini . " hora " . $hora . "<br>";
      //  echo $fecha_ini;
      if($dia_semana==$dia ){
          echo "<td style='background-color:red'>".$fecha_ini ." Hora: ". $hora . "</td>>";
      }
     /* if($dia_semana==$dia && $hora==$str_hora_ini){
          echo "<td style='background-color:red'>" . $hora . "</td>>";
      } */

                //   echo $fechaini;
                     /*   $str_hora_ini = substr($fechaini, 11, 2);
                        // var_dump($str_hora_ini);die;
                        $str_dias = substr($fechaini, 0, 10);
                        // echo $str_dias."<br>";
                        $dias = array('Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado');
                        $dia = $dias[date('w', strtotime($str_dias))];
                         echo $dia . "<br>";

                            $dia_semana = 'Lunes'; */

                           // echo "<td>" . $fecha_ini . " hora " . $hora . "<br>";
                         //  echo $fecha_ini;

                           // if ($fecha_ini == $dia && $hora == $str_hora_ini) {

                             //    echo "<td> array d-h " . $fecha_ini . " hora " . $hora . "<br>";
                                //  echo "<td style='background-color:red'>" . $columna['fecha_hora_inicio'] . " " . $columna['descripcion'] . "</td>";
                             //else if ($fecha_ini != $dia && $hora != $str_hora_ini) {
                            // echo "<td style='background-color:red'>gf</td>";
                            //}


                            //  while ($columna = mysqli_fetch_array($resultado2)) {

                            //   echo "<td style='background-color:red'>".$columna['fecha_hora_inicio']." ".$columna['descripcion']."</td>";
                            //}




          /*   $nuevelunes=Reserva::all();
               foreach($nuevelunes as $fecha_ini){

                $fechaini=$fecha_ini->fecha_hora_inicio;
                $fechafin=$fecha_ini->fecha_hora_fin;

            //  $str_dia = substr($fecha,8,2);
                $str_dias=substr($fechaini,0,10);
             // echo $str_dias."</br>";
                $str_hora_ini = substr($fechaini,11,2);
                $str_hora_fin = substr($fechafin,11,2);
                $hora_nueve='09';
                $hora_diez='10';
                $hora_once='11';
                $dias=array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado');
                $dia=$dias[date('w',strtotime($str_dias))];

                $dia_semana='Lunes';

                if (($dia == $dia_semana) && ($str_hora_ini == $hora_nueve) && ($str_hora_fin == $hora_once)) {



                 echo '<span style="background-color:#ed5340 ">' . $dia_semana . ": " . $str_dias . " Hora, desde las: " . $str_hora_ini . " Hasta las: " . $str_hora_fin . "</br>" . $fecha_ini->descripcion . "</br>" . '</td>';
                   } else
             if(($dia==$dia_semana)&&($str_hora_ini==$hora_nueve)){
             echo '<span  style="background-color:red">'.$dia_semana.": ".$str_dias." Hora, desde las: ".$str_hora_ini." Hasta las: ".$str_hora_fin."</br>".$fecha_ini->descripcion."</br>";

             }
               }

          */
            ?>
        </tr>



        <tr>
            <td id="tab">10-11</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td id="tab">11-12</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td id="tab">12-13</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>



        <tr>
            <td id="tab">13-14</td>

            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>



        </tr>

        <tr>
            <td id="tab" name="catorce">14-15</td>

            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td id="tab">15-16</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td id="tab">16-17</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td id="tab">17-18</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td id="tab">18-19</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td id="tab">19-20</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

    </table>

    <button class="volver"><a href="/salas">Volver</a></button>
    <button class="reserva"><a href="/reserva">Crear reserva</a></button>
</div>

</body>
</html>
