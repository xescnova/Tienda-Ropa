<?php

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'insert':
            addCart($ident);
            break;
        case 'select':
            select();
            break;
    }
}

function fetchAll()
{
    require_once 'conexionMongo.php';
    $peticion = $db->find();
    $i = 0;
    foreach ($peticion as $producto) {
        if ($i % 4 == 0) {
            echo '<div class="w-100"></div>';
        }
        echo '
            <div class="col-md-3 col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="product-detail.php?item='. $producto["sku"] .'" class="prod-img">
                        <img src="' . $producto["imagen"] . '" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">' . $producto["titulo"] .  '</a></h2>
                        <span class="price">' . $producto["precio"] . '€</span>
                    </div>
                </div>
            </div>
        ';
        $i++;
    }
}

function fetchLimit($limit)
{
    require_once 'conexionMongo.php';
    $peticion = $db->find();
    $i = 0;
    foreach ($peticion as $producto) {
        echo '
            <div class="col-md-3 col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="product-detail.php?item='. $producto["sku"] .'" class="prod-img">
                        <img src="' . $producto["imagen"] . '" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">' . $producto["titulo"] .  '</a></h2>
                        <span class="price">' . $producto["precio"] . '€</span>
                    </div>
                </div>
            </div>
        ';
        if (++$i == $limit) {
            break;
        }
        if ($i == 4) {
            echo '<div class="w-100"></div>';
        }
    }
}

function fetchCategoria($categoria) {
    require_once 'conexionMongo.php';
    $peticion = $db->find("{categoria: '.$categoria.'}");

    $filtro = array('categoria' => $categoria);
    $peticion = $db->find($filtro);

    $i = 0;
    foreach ($peticion as $producto) {
        echo '
            <div class="col-md-3 col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="product-detail.php?item='. $producto["sku"] .'" class="prod-img">
                        <img src="' . $producto["imagen"] . '" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">' . $producto["titulo"] .  '</a></h2>
                        <span class="price">' . $producto["precio"] . '€</span>
                    </div>
                </div>
            </div>
        ';
        if (++$i == $limit) {
            break;
        }
        if ($i == 4) {
            echo '<div class="w-100"></div>';
        }
    }
}

function fetchProducto($id_prod,$id) {
    require_once 'conexionMongo.php';
    $filtro = array('sku' => $id_prod);
    $peticion = $db->find($filtro);
    foreach ($peticion as $producto) {
        
        echo '<div class="row row-pb-lg product-detail-wrap">
        <div class="col-sm-8">
            <div class="owl-carousel">
                <div class="item">
                    <div class="product-entry border">
                        <a href="#" class="prod-img">
                            <img src="'.$producto["imagen"].'" class="img-fluid" alt="Free html5 bootstrap 4 template">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="product-entry border">
                        <a href="#" class="prod-img">
                            <img src="'.$producto["imagen"].'" class="img-fluid" alt="Free html5 bootstrap 4 template">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-sm-4">
        <form action="addCartBD.php" method="get">
            <div class="product-desc">
                <h3>'.$producto["titulo"].'</h3>
                <p class="price">
                    <span>'.$producto["precio"].'€</span> 
                    <span class="rate">
                        <i class="icon-star-full"></i>
                        <i class="icon-star-full"></i>
                        <i class="icon-star-full"></i>
                        <i class="icon-star-full"></i>
                        <i class="icon-star-half"></i>
                        (74 Rating)
                    </span>
                </p>
                <p>'.$producto["descripcion"].'</p>
                
                <div class="size-wrap">
                    <div class="block-26 mb-2">
                        <h4>Size</h4>
                        <select name="size" id="size" class="form-control">';
                            
                            
                            foreach ($producto["stock"] as $Object)
                            {
                                
                                echo '<li><option value='.$Object["talla"].'>'.$Object["talla"].'</option></li>';
                            }
                            //$size = $_POST['size'];
                            echo 'You have chosen: ' . $selected;
                         echo   
                        '</select>
                </div>
                </div>
         <div class="input-group mb-4">
             <span class="input-group-btn">
                <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
               <i class="icon-minus2"></i>
                </button>
                </span>
             <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
             <span class="input-group-btn ml-1">
                <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                 <i class="icon-plus2"></i>
             </button>
             </span>
          </div>
          <div class="row">
              <div class="col-sm-12 text-center">
                    
                        <p class="addtocart"><input type="Submit" class="submit" name="Modifica" value="Add to cart"><i class="icon-shopping-cart"></i></p>
                        <input type="hidden" name="item" value='.$producto["sku"].'>
                        <input type="hidden" name="cart" value=true>
                    </div>
                </div>
            </div>
            </form>
        </div>
        
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-md-12 pills">
                    <div class="bd-example bd-example-tabs">
                      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                        <li class="nav-item">
                          <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Description</a>
                        </li>
                      </ul>

                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane border fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                          <p>'.$producto["descripcion"].'</p>
                        </div>
                      </div>
                    </div>
             </div>
            </div>
        </div>
    </div>';
    }
}

function test($size)
{
    $selectedSize = $size;
}

    

    function select() {
        echo "The select function is called.";
        exit;
    }

    function insert() {
        echo "The insert function is called.";
        exit;
    }


    
function addCart($ident,$iditem,$size,$quantity)
{
    include "conexionSQLServer.php";

    // Crear el carrito si no existe
    $conex->exec(" 
    If Not Exists(select * from carrito where id_usr=".$ident.")
        Begin
            insert into carrito (create_date,expire_date,id_usr) values (GETDATE(),DATEADD(minute, +10, GETDATE()),".$ident.")
        End
    ");

    // Buscamos el idCarrito que corresponde al usuario
    $consulta=$conex->prepare("select id_carrito from carrito where id_usr=$ident");
    $consulta->execute();
    $datos=$consulta->fetchAll(PDO::FETCH_OBJ);
    if($datos != null){
        $idcart=$datos[0]->id_carrito;
    }

    // Buscamos la talla
    $consulta=$conex->prepare("select id_talla from talla where nombre_talla='$size'");
    $consulta->execute();
    $datosTalla=$consulta->fetchAll(PDO::FETCH_OBJ);
    if($datosTalla != null){
        $idsize=$datosTalla[0]->id_talla;
    }
    echo "(".$idcart.",".$iditem.",".$quantity.",".$idsize.")";
    // Añadir producto al carrito
    $conex->exec("If Not Exists(select * from cantidad where idc_carrito=$idcart AND idc_producto=$iditem AND id_tal=$idsize)
    Begin
        insert into cantidad (idc_carrito,idc_producto,cantidad,id_tal) values ($idcart,$iditem,$quantity,$idsize);
    End
    Else
    Begin
        update cantidad set cantidad=cantidad+$quantity where idc_carrito=$idcart AND idc_producto=$iditem AND id_tal=$idsize;
    END");
    
}
?>
