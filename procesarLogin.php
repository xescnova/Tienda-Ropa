<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login  2</title>
</head>
<body>
    <?php

    $us=$_POST['lg_username'];
    $co=$_POST['lg_password'];
  //  $_SESSION['nombre']=$us;
   // $_SESSION['usu']=$_POST['Usuari'];
    //$_SESSION['cont']=$_POST['Contrasenya'];
    include "conexionSQLServer.php";
    $consulta=$conex->prepare("SELECT * FROM Usuario where name='".$us."' AND password='".$co."'");
    $consulta->execute();
    $datos=$consulta->fetchAll(PDO::FETCH_ASSOC);
    echo "PRUEBA";
    if($datos != null){
        header('Location: home.php');
    }
    else{
        echo "Error login";
    }
    ?>
</body>
</html>