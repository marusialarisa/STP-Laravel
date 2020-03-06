
<html>
<head>

    <title>PRUEBAS PRACTICA</title>
    <style>
        *{margin: 0px; padding: 0px;}
        body{background-color:#f9fafa;margin: 0px;}
        .container{margin-left:33%; margin-top:50px;}
        h1{margin-left:12%;}
        h2{margin-left:16%;}
        .sala{width: 450px; height: 50px; background-color: #07aee8;border-radius:20px; margin-top:20px; font-size:20px; color:white; }
        a{color:black; text-decoration:none}
        .volver{width: 100px; height: 30px; background-color: #a0d3e5; margin:50px; margin-left:160px; font-size:15px;}
        .resp{display: none;}
    </style>

</head>
<body>


<?php

//
?>

<div class="container">
    <h1>Edificio Canada:</h1>
    <h2><?=$title; ?></h2>
    <form action="post""  method="post">
    <button class="sala" name="nombre_sala"><a href="/estado">Sala Cloud</a></button>
    <button class="sala" name="nombre_sala"><a href="/estado">Sala Event</a></button>
    <button class="sala" name="nombre_sala"><a href="/estado">Sala Stp</a></button>
    <button class="sala" name="nombre_sala"><a href="/estado">Sala Cusiness</a></button><br>
    <button class="resp" name="responsable"></button>
    <button class="volver"><a href="/sede">Volver</a></button>
    </form>

</div>




</body>
</html>
