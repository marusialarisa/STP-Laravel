<html>
<head>

    <title>PRUEBAS PRACTICA</title>
    <style>
        *{margin: 0px; padding: 0px;}
        body{background-color:#f9fafa;margin: 0px;}
        .container{width: 60%;height: 100%;}
        .formulario{ margin-left:20%; width:60%; margin-top:20px;; position: absolute;background-color: lavender; opacity: 0.9; font-family: sans-serif; border-radius:20px;}
        form{text-align: right;margin-right: 250px;margin-top: 20px; }
        label{margin: 30px;}

        h1{margin-top: 5%; margin-left:33%;}
        #inp {background-color: #f9fafa;width:200px; height:30px; border-radius:4px; width:200px;}
        #inic {background-color: #f9fafa;width:200px; height:30px; border-radius:4px;}
        #fin {background-color: #f9fafa;width:200px; height:30px; border-radius:4px;}
        #desc{background-color: #f9fafa;width:200px; height:30px; border-radius:4px; height:100px;}

        #sub{background-color: #5fdfa9 ; width:80px; height:30px;  margin-top: 20px; margin-left:100px; margin-bottom:30px;}
        #bt1{background-color:  #f18f82 ; width:80px; height:30px; margin-top: 20px; margin-left:50px; margin-bottom:30px;}
        a{text-decoration:none; color:black;}

    </style>

</head>
<body>


<?php


use Rentit\Models\Reserva; ?>

<div class="container">
    <div class="formulario">
        <h1><?=$title; ?></h1>

        <form action="/reserva/reserva"  method="post">
            <label for="sede">Sede:</label>
            <input type="text" id="inp" name="sede" value="Edificio Canada"></br><br>

            <label for="sala">Sala:</label>
            <input type="text" id="inp" name="sala" value="Sala Cloud"></br><br>

            <label for="inif">Fecha, desde las:</label>
            <input type="datetime" id="inic" name="fecha_hora_inicio" placeholder="Introduce la fecha y la hora.."></br><br>

            <label for="finf">Fecha, hasta las:</label>
            <input type="datetime" id="fin" name="fecha_hora_fin" placeholder="Introduce la fecha y la hora.."></br><br>

            <label for="desc">Descripcion</label>
            <input type="text" id="desc"  name="descripcion" placeholder="Descripcion.."></br><br>


            <input type="submit" id="sub" name="submit" value="ACEPTAR">



            <button id="bt1" name="bt"><a href="/estado">CANCELAR</a></button>
        </form>
    </div>
</div>




</body>
</html>
