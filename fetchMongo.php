<?php

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
                    <a href="#" class="prod-img">
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
                    <a href="#" class="prod-img">
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
                    <a href="#" class="prod-img">
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

function fetchProducto($id_prod) {
    require_once 'conexionMongo.php';
    $peticion = $db->find("{categoria: '.$categoria.'}");

    $filtro = array('sku' => $id_prod);
    $peticion = $db->find($filtro);

    $i = 0;
    foreach ($peticion as $producto) {
        echo '
            <div class="col-md-3 col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
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
