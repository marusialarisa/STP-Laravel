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





   <!----  <form action="/estado/consultar" method="post">
              <input type="submit" id="sub" name="submit" value="Entra"><br>
          </form> --->

                <?php


               $horastotales=[['9-10','2020-03-02 09:00:00','2020-03-03 09:00:00','2020-03-04 09:00:00','2020-03-05 09:00:00','2020-03-06 09:00:00','2020-03-07 09:00:00','2020-03-08 09:00:00'],
                             ['10-11','2020-03-02 10:00:00','2020-03-03 10:00:00','2020-03-04 10:00:00','2020-03-05 10:00:00','2020-03-06 10:00:00','2020-03-07 10:00:00','2020-03-08 10:00:00'],
                             ['11-12','2020-03-02 11:00:00','2020-03-03 11:00:00','2020-03-04 11:00:00','2020-03-05 11:00:00','2020-03-06 11:00:00','2020-03-07 11:00:00','2020-03-08 11:00:00'],
                             ['12-13','2020-03-02 12:00:00','2020-03-03 12:00:00','2020-03-04 12:00:00','2020-03-05 12:00:00','2020-03-06 12:00:00','2020-03-07 12:00:00','2020-03-08 12:00:00'],
                             ['13-14','2020-03-02 13:00:00','2020-03-03 13:00:00','2020-03-04 13:00:00','2020-03-05 13:00:00','2020-03-06 13:00:00','2020-03-07 13:00:00','2020-03-08 13:00:00'],
                             ['14-15','2020-03-02 14:00:00','2020-03-03 14:00:00','2020-03-04 14:00:00','2020-03-05 14:00:00','2020-03-06 14:00:00','2020-03-07 14:00:00','2020-03-08 14:00:00'],
                             ['15-16','2020-03-02 15:00:00','2020-03-03 15:00:00','2020-03-04 15:00:00','2020-03-05 15:00:00','2020-03-06 15:00:00','2020-03-07 15:00:00','2020-03-08 15:00:00'],
                             ['16-17','2020-03-02 16:00:00','2020-03-03 16:00:00','2020-03-04 16:00:00','2020-03-05 16:00:00','2020-03-06 16:00:00','2020-03-07 16:00:00','2020-03-08 16:00:00'],
                             ['17-18','2020-03-02 17:00:00','2020-03-03 17:00:00','2020-03-04 17:00:00','2020-03-05 17:00:00','2020-03-06 17:00:00','2020-03-07 17:00:00','2020-03-08 17:00:00'],
                             ['18-19','2020-03-02 18:00:00','2020-03-03 18:00:00','2020-03-04 18:00:00','2020-03-05 18:00:00','2020-03-06 18:00:00','2020-03-07 18:00:00','2020-03-08 18:00:00'],
                             ['19-20','2020-03-02 19:00:00','2020-03-03 19:00:00','2020-03-04 19:00:00','2020-03-05 19:00:00','2020-03-06 19:00:00','2020-03-07 19:00:00','2020-03-08 19:00:00']
                             ];

                   foreach($horastotales as $fila){
                    echo '<tr>';
                    foreach ($fila as $fecha){

                        //   echo '<td>'.$fecha.'</td>';

                  $usuario = "root";
                  $contrasena = "linuxlinux";
                  $servidor = 'localhost';
                  $db = "salas";

                  $conexion = mysqli_connect($servidor, $usuario, $contrasena);
                  $basedatos = mysqli_select_db($conexion, $db);
                  $consulta="SELECT * FROM reserva";


                  //   $consulta = "SELECT * FROM `reserva` WHERE fecha_hora_inicio =STR_TO_DATE('2020-03-02 09:00:00', '%Y-%m-%d %H:%i:%s')";
                  //    $consulta="SELECT * FROM `reserva` WHERE fecha_hora_inicio <=STR_TO_DATE('2020-03-02 09:20:00', '%Y-%m-%d %H:%i:%s') and fecha_hora_fin >=STR_TO_DATE('2020-03-04 09:00:00', '%Y-%m-%d %H:%i:%s') ";

                  $resultado = mysqli_query($conexion, $consulta);

                     //   echo '<td>'.$hora.'</td>';

                   $fila='<td>';


                        $hora_nueve = '9-10';
                        $hora_diez = '10-11';
                        $hora_once = '11-12';
                        $hora_doce = '12-13';
                        $hora_trece = '13-14';
                        $hora_catorce = '14-15';
                        $hora_quinze= '15-16';
                        $hora_dieciseis = '16-17';
                        $hora_diecisiete= '17-18';
                        $hora_dieciocho= '18-19';
                        $hora_diecinueve ='19-20';

                        $lunes_horaNueve='2020-03-02 09:00:00';

                        if ($hora_nueve == $fecha) {
                            $fila="<th style='background-color:lightblue'>" . $hora_nueve . "</th>";
                            //  echo $hora_nueve;
                            echo $fila;

                        } else  if ($hora_diez == $fecha) {
                            $fila="<th style='background-color:lightblue'>" . $hora_diez . "</th>";
                                // echo $hora_diez;
                            echo $fila;
                        } else  if ($hora_once == $fecha) {
                            $fila="<th style='background-color:lightblue'>" . $hora_once . "</th>";
                            //echo $hora_once;
                            echo $fila;

                        }
                        else  if ($hora_doce == $fecha) {
                            $fila="<th style='background-color:lightblue'>" . $hora_doce. "</th>";
                            //echo $hora_once;
                            echo $fila;

                        }
                        else  if ($hora_trece == $fecha) {
                            $fila="<th style='background-color:lightblue'>" . $hora_trece. "</th>";
                            //echo $hora_once;
                            echo $fila;

                        }
                        else  if ($hora_catorce== $fecha) {
                            $fila="<th style='background-color:lightblue'>" . $hora_catorce . "</th>";
                            //echo $hora_once;
                            echo $fila;

                        }
                        else  if ($hora_quinze == $fecha) {
                            $fila="<th style='background-color:lightblue'>" . $hora_quinze . "</th>";
                            //echo $hora_once;
                            echo $fila;

                        }
                        else  if ($hora_dieciseis == $fecha) {
                            $fila="<th style='background-color:lightblue'>" . $hora_dieciseis. "</th>";
                            //echo $hora_once;
                            echo $fila;

                        }
                        else  if ($hora_diecisiete == $fecha) {
                            $fila="<th style='background-color:lightblue'>" . $hora_diecisiete . "</th>";
                            //echo $hora_once;
                            echo $fila;

                        }
                        else  if ($hora_dieciocho == $fecha) {
                            $fila="<th style='background-color:lightblue'>" . $hora_dieciocho . "</th>";
                            //echo $hora_once;
                            echo $fila;

                        }
                        else  if ($hora_diecinueve == $fecha) {
                            $fila="<th style='background-color:lightblue'>" . $hora_diecinueve. "</th>";
                            //echo $hora_once;
                            echo $fila;

                        }

                            else {

                                while ($columna = mysqli_fetch_array($resultado)) {
                                    $fechaini = $columna['fecha_hora_inicio'];
                                    $fechafin = $columna['fecha_hora_fin'];
                                    $descr = $columna['descripcion'];


                                    $str_hora_ini = substr($fechaini, 11, 2);
                                    $str_hora_fin = substr($fechafin, 11, 2);


                                    $horaNueve = '09';
                                    $horaDiez = '10';
                                    $horaOnce = '11';
                                    $horaDoce = '12';
                                    $horaTrece = '13';
                                    $horaCatorce = '14';
                                    $horaQuinze= '15';
                                    $horaDieciseis = '16';
                                    $horaDiecisiete = '17';
                                    $horaDieciocho = '18';
                                    $horaDiecinueve = '19';
                                    $horaVente = '20';

                                    $primero = "1";
                                    $segundo = "2";


                              /*     if ($fechaini == $fecha) {
                                        $fila = "<td style='background-color:red'>" . $fechaini . " Hasta las: " . $str_hora_fin . " " . $descr;
                                        echo $fila;
                                    }*/
                                    //9-10
                                    if ($fechaini == $fecha && $str_hora_ini == $horaNueve && $str_hora_fin == $horaDiez) {
                                         $fila = "<td style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin . " " . $descr;
                                         $primero = true;
                                         echo $fila;

                                     }    else if ($fechaini == $fecha && $str_hora_ini == $horaNueve && $str_hora_fin == $horaOnce && $primero = true) {
                                           $fila = "<td style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin;
                                       //  $fila = "<td rowspan=".$segundo." style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin ." ".$descr. "</td>";
                                         $segundo = true;
                                         $primero = false;
                                         echo $fila;

                                     }
                                    //10-11
                                     else if ($fechaini == $fecha && $str_hora_ini == $horaDiez && $str_hora_fin == $horaOnce) {
                                         $fila = "<td style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin . " " . $descr;
                                         $primero = true;
                                         echo $fila;
                                     } else if ($fechaini == $fecha && $str_hora_ini == $horaDiez && $str_hora_fin == $horaDoce && $primero = true) {
                                         $fila = "<td style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin;
                                         //   $fila = "<td rowspan=".$segundo." style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin ." ".$descr. "</td>";
                                         $segundo = true;
                                         $primero = false;
                                         echo $fila;

                                     }
                                     //11-12
                                     else if ($fechaini == $fecha && $str_hora_ini == $horaOnce && $str_hora_fin == $horaDoce) {
                                         $fila = "<td style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin . " " . $descr;
                                         $primero = true;
                                         echo $fila;
                                     } else if ($fechaini == $fecha && $str_hora_ini == $horaOnce && $str_hora_fin == $horaTrece && $primero = true) {
                                         $fila = "<td style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin;
                                         //   $fila = "<td rowspan=".$segundo." style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin ." ".$descr. "</td>";
                                         $segundo = true;
                                         $primero = false;
                                         echo $fila;

                                     }
                                     //12-13
                                     else if ($fechaini == $fecha && $str_hora_ini == $horaDoce && $str_hora_fin == $horaTrece) {
                                         $fila = "<td style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin . " " . $descr;
                                         $primero = true;
                                         echo $fila;
                                     } else if ($fechaini == $fecha && $str_hora_ini == $horaDoce && $str_hora_fin == $horaCatorce && $primero = true) {
                                         $fila = "<td style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin;
                                         //   $fila = "<td rowspan=".$segundo." style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin ." ".$descr. "</td>";
                                         $segundo = true;
                                         $primero = false;
                                         echo $fila;

                                     }
                                     //13-14
                                     else if ($fechaini == $fecha && $str_hora_ini == $horaTrece && $str_hora_fin == $horaCatorce) {
                                         $fila = "<td style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin . " " . $descr;
                                         $primero = true;
                                         echo $fila;
                                     } else if ($fechaini == $fecha && $str_hora_ini == $horaTrece && $str_hora_fin == $horaQuinze && $primero = true) {
                                         $fila = "<td style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin;
                                         //   $fila = "<td rowspan=".$segundo." style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin ." ".$descr. "</td>";
                                         $segundo = true;
                                         $primero = false;
                                         echo $fila;

                                     }
                                     //14-15
                                     else if ($fechaini == $fecha && $str_hora_ini == $horaCatorce && $str_hora_fin == $horaQuinze) {
                                         $fila = "<td style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin . " " . $descr;
                                         $primero = true;
                                         echo $fila;
                                     } else if ($fechaini == $fecha && $str_hora_ini == $horaCatorce && $str_hora_fin == $horaDieciseis && $primero = true) {
                                         $fila = "<td style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin;
                                         //   $fila = "<td rowspan=".$segundo." style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin ." ".$descr. "</td>";
                                         $segundo = true;
                                         $primero = false;
                                         echo $fila;

                                     }
                                     //15-16
                                     else if ($fechaini == $fecha && $str_hora_ini == $horaQuinze && $str_hora_fin == $horaDieciseis) {
                                         $fila = "<td style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin . " " . $descr;
                                         $primero = true;
                                         echo $fila;
                                     } else if ($fechaini == $fecha && $str_hora_ini == $horaQuinze && $str_hora_fin == $horaDiecisiete && $primero = true) {
                                         $fila = "<td style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin;
                                         //   $fila = "<td rowspan=".$segundo." style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin ." ".$descr. "</td>";
                                         $segundo = true;
                                         $primero = false;
                                         echo $fila;

                                     }
                                     //16-17
                                     else if ($fechaini == $fecha && $str_hora_ini == $horaDieciseis && $str_hora_fin == $horaDiecisiete) {
                                         $fila = "<td style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin . " " . $descr;
                                         $primero = true;
                                         echo $fila;
                                     } else if ($fechaini == $fecha && $str_hora_ini == $horaDieciseis && $str_hora_fin == $horaDieciocho && $primero = true) {
                                         $fila = "<td style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin;
                                         //   $fila = "<td rowspan=".$segundo." style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin ." ".$descr. "</td>";
                                         $segundo = true;
                                         $primero = false;
                                         echo $fila;

                                     }

                                     //17-18
                                     else if ($fechaini == $fecha && $str_hora_ini == $horaDiecisiete && $str_hora_fin == $horaDieciocho) {
                                         $fila = "<td style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin . " " . $descr;
                                         $primero = true;
                                         echo $fila;
                                     } else if ($fechaini == $fecha && $str_hora_ini == $horaDiecisiete && $str_hora_fin == $horaDiecinueve && $primero = true) {
                                         $fila = "<td style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin;
                                         //   $fila = "<td rowspan=".$segundo." style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin ." ".$descr. "</td>";
                                         $segundo = true;
                                         $primero = false;
                                         echo $fila;

                                     }
                                     //18-19
                                     else if ($fechaini == $fecha && $str_hora_ini == $horaDieciocho && $str_hora_fin == $horaDiecinueve) {
                                         $fila = "<td style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin . " " . $descr;
                                         $primero = true;
                                         echo $fila;
                                     } else if ($fechaini == $fecha && $str_hora_ini == $horaDieciocho && $str_hora_fin == $horaVente && $primero = true) {
                                         $fila = "<td style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin;
                                         //   $fila = "<td rowspan=".$segundo." style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin ." ".$descr. "</td>";
                                         $segundo = true;
                                         $primero = false;
                                         echo $fila;

                                     }
                                     //19-20
                                     else if ($fechaini == $fecha && $str_hora_ini == $horaDiecinueve && $str_hora_fin == $horaVente) {
                                         $fila = "<td style='background-color:red'" . $fechaini . " Hasta las: " . $str_hora_fin . " " . $descr;
                                         $primero = true;
                                         echo $fila;
                                     }



                                }if($lunes_horaNueve!=$fecha){
                                  $fila = "<td style='background-color:green'>";
                                  echo $fila;}


                        }


                        echo '</td>';


                    }

                  echo '</tr>';

              }

            ?>

    </table>

    <button class="volver"><a href="/salas">Volver</a></button>
    <button class="reserva"><a href="/reserva">Crear reserva</a></button>
</div>

</body>
</html>
