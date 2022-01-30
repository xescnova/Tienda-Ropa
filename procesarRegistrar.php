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

    $us=$_POST['reg_username'];
    $co=$_POST['reg_password'];
    $_SESSION['nombre']=$us;

    include "conexionSQLServer.php";
    $consulta=$conex->prepare("SELECT * FROM Usuario where name='".$us."' ");
    $consulta->execute();
    $datos=$consulta->fetchAll(PDO::FETCH_OBJ);
    if($datos != null){
        echo "Usuario ya existe";
    }
    else{
       // echo $datos[0]->id;
        //$_SESSION['id']=$datos[0]->id;
        $usuario= $_POST['reg_username'];
        $apellido= $_POST['reg_apellido'];
        $pass=$_POST['reg_password'];
        $email=$_POST['reg_email'];
        try{
        $conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql= "INSERT INTO Usuario (name,apellido,email,password,credito) VALUES ('".$usuario."','".$apellido."','".$email."','".$pass."','3000')";
        echo $sql;
        $conex->exec($sql);
        $action= "index.php";
        header('Location: index.php');
        
        }
        catch (PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
        }
    }
    $conex=null;
    ?>
</body>
</html>