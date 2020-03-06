<html>
<head>

    <title>PRUEBAS PRACTICA</title>
    <style>
        *{margin: 0px; padding: 0px;}
        body{margin: 0px; background-color:#f9fafa}
        .container{width: 30%;height: 100%;}
        .formulario{margin-left: 35%; position: absolute;background-color: lavender;top:50px;opacity: 0.9;font-family: sans-serif; border-radius:20px;}
        form{height: 200px;text-align: right;margin-right: 130px;margin-top: 20px; }
        label{margin: 30px;}

        h1{margin-top: 50px; margin-left:200px; color: #0946c1 ;}
        h2{margin-top: 20px; margin-left:120px;}
        #inp{background-color: #f9fafa;width:200px; height:30px; border-radius:4px;}
        #sub{background-color:  #b8caef  ; width:80px; height:30px; margin:50px; margin-top: 20px;}

    </style>

</head>
<body>


<?php


?>

<div class="container">

    <div class="formulario">
        <h1><b><?=$title; ?></b></h1>
        <h2>Crea una cuenta</h2>
        <form action="/registrar/registrar" method="post">
            <label for="nom">Nombre</label>
            <input type="text" id="inp" name="username" placeholder="Introduce tu nombre.."></br><br>
            <label for="passwd">Contraseña</label>
            <input type="password" id="inp" name="password" placeholder="Introduce la contraseña.."></br><br>
            <label for="passwd">Contraseña</label>
            <input type="password" id="inp" name="password2" placeholder="Repite la contraseña.."></br><br>
            <input type="submit" id="sub" name="submit" value="Registrar"><br>

        </form>
    </div>
</div>




</body>
</html>
