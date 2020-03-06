<html>
<head>

    <title>PRUEBAS PRACTICA</title>
    <style>
        *{margin: 0px; padding: 0px;}
        body{background-color:#f9fafa;margin: 0px;}
        .container{margin-left:33%; margin-top:50px;}
        h1{margin-left:12%;}
        .sede{width: 450px; height: 50px; background-color: #07aee8;border-radius:20px; margin-top:20px; font-size:20px; color:white; }
        a{color:black; text-decoration:none;}
        .volver{width: 100px; height: 30px; background-color:  #a0d3e5  ; margin:50px; margin-left:160px; font-size:15px; }
    </style>

</head>
<body>


<?php


?>

<div class="container">
    <h1><?=$title; ?></h1>
    <form action="post" method="post">
    <button class="sede" name="nombre_sede"><a href="/salas">Edificio Canada</a></button>
    <button class="sede" name="nombre_sede"><a href="/salas">Edificio Brasil</a></button>
    <button class="sede" name="nombre_sede"><a href="/salas">Business</a></button>
    <button class="sede" name="nombre_sede"><a href="/salas">Delta Business Center</a></button><br>
    <button class="volver"><a href="/login">Volver</a></button>
    </form>
</div>




</body>
</html>
