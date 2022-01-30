<?php
    session_start(); 
    $idP=$_GET['producto'];
    $ide = $_SESSION['id'];
    include "conexionSQLServer.php";
    $consulta=$conex->prepare("DELETE cantidad FROM CANTIDAD JOIN CARRITO 
    on idc_carrito=id_carrito JOIN PRODUCTO
    on id_producto=idc_producto and idc_producto='$idP'
    where id_usr='$ide'");
    $consulta->execute();
    $datos=$consulta->fetchAll(PDO::FETCH_OBJ);
    $action= "cart.php";
    header('Location: cart.php');
?>

