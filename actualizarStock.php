<?php
require_once 'conexionMongo.php';
require_once 'conexionSQLServer.php';

    $consulta = $conex->prepare("SELECT ide_producto, nombre_talla, estoc  FROM ESTOC JOIN TALLA ON ESTOC.ide_talla = TALLA.id_talla");
    $consulta->execute();
    $datos = $consulta->fetchAll(PDO::FETCH_OBJ);

    for ($i = 0; $i < count($datos); $i++) {
        $peticion = $db->updateOne(['sku' => intval($datos[$i]->ide_producto), 'stock.talla' => doubleval($datos[$i]->nombre_talla)],['$set' => ['stock.$.stock' => intval($datos[$i]->estoc)]]);
    }

    $action= "home.php";
    header('Location: home.php');