<?php session_start(); 
$ide = $_SESSION['id'];
$di= $_GET['dir'];
$pTot= $_GET['precioTotal'];
$idcarrito= $_GET['idCarr'];

include "conexionSQLServer.php";
//Nos muestra una tabla con la cantidad del carrito de los productos y el estoc real que hay de estos
$consulta2=$conex->prepare("SELECT cantidad,estoc,id_talla,ide_producto FROM CANTIDAD JOIN TALLA 
on id_tal=id_talla JOIN ESTOC 
ON id_talla=ide_talla JOIN PRODUCTO on
idc_producto=id_producto JOIN CARRITO 
on idc_carrito=id_carrito and ide_producto=id_producto and idc_carrito='$idcarrito'");
    $consulta2->execute();
    $datos2=$consulta2->fetchAll(PDO::FETCH_OBJ);
//Consultar estoc
foreach ($datos2 as $producto) {
    if($producto->estoc < $producto->cantidad){
       echo '<script>alert("Error , no hay estoc disponible");</script>';
       break;
    }
}
//Consultamos saldo del usuario
$consulta4=$conex->prepare("SELECT credito FROM usuario where id='$ide'");
$consulta4->execute();
$datos4=$consulta4->fetchAll(PDO::FETCH_OBJ);
if($datos4[0]->credito < $pTot){
    echo '<script>alert("Error , no hay saldo suficiente");</script>'; 
    $action= "cart.php";
    header('Location: cart.php');  
        
}
else{
//Restamos saldo de la compra al usuario
$consulta3=$conex->prepare("UPDATE usuario set credito=credito -'$pTot' where id='$ide'");
$consulta3->execute();
$datos3=$consulta3->fetchAll(PDO::FETCH_OBJ);
//Actualizamos el stock
$consulta6=$conex->prepare("SELECT cantidad,estoc,id_talla,ide_producto FROM CANTIDAD JOIN TALLA 
on id_tal=id_talla JOIN ESTOC 
ON id_talla=ide_talla JOIN PRODUCTO on
idc_producto=id_producto JOIN CARRITO 
on idc_carrito=id_carrito and ide_producto=id_producto and idc_carrito='$idcarrito'");
$consulta6->execute();
$datos6=$consulta6->fetchAll(PDO::FETCH_OBJ);
foreach ($datos6 as $producto) {
    $consulta7=$conex->prepare("UPDATE estoc set estoc=estoc-$producto->cantidad where ide_producto=$producto->ide_producto and ide_talla=$producto->id_talla");
    $consulta7->execute();
    $datos7=$consulta7->fetchAll(PDO::FETCH_OBJ);
    
}

//Ponemos el carrito a estado confirmado
$consulta=$conex->prepare("UPDATE carrito set estado='CONFIRMADO' WHERE id_carrito='$idcarrito'");
$consulta->execute();
$datos=$consulta->fetchAll(PDO::FETCH_OBJ);


//Añadimos un pedido nuevo
$consulta5=$conex->prepare("INSERT INTO pedido (direccion,precio_total,idp_usr,idp_carrito) VALUES ('$di',$pTot,$ide,$idcarrito)");
echo json_encode($consulta5);
$consulta5->execute();
$datos=$consulta5->fetchAll(PDO::FETCH_OBJ);
echo '<script>alert("Pago exitoso");</script>'; 
$action= "order-complete.html";
header('Location: order-complete.html');
}

?>



