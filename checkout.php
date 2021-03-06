<!DOCTYPE HTML>
<?php session_start();
require_once 'fetchMongo.php'; ?>
<html>

<head>
    <title>Tienda Sancionados</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Ion Icon Fonts-->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Date Picker -->
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php
	$us = $_SESSION['nombre'];
	$ide = $_SESSION['id'];
	?>

    <div class="colorlib-loader"></div>

    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-md-9">
                            <div id="colorlib-logo"><a href="home.php">Tienda Sancionados</a></div>
                            <div id="nombreUs">Bienvenido
                                <?php
								$us = $_SESSION['nombre'];
								echo $us;
								?></div>
                        </div>
                        <div class="col-sm-5 col-md-3">
                            <form action="#" class="search-wrap">
                                <div class="form-group">
                                    <input type="search" class="form-control search" placeholder="Search">
                                    <button class="btn btn-primary submit-search text-center" type="submit"><i
                                            class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-left menu-1">
                            <ul>
                                <li><a href="home.php">Inicio</a></li>
                                <li><a href="men.php">Hombres</a></li>
                                <li><a href="women.php">Mujer</a></li>
                                <li><a href="children.php">Ni??os</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <?php
								if ($_SESSION['id'] == 1) {
									echo '<li><a href="actualizarStock.php">Actualizar stock</a></li>';
								}
								?>
								<?php if($_SESSION['id'])
                                        numCart($_SESSION['id']); ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="sale">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 offset-sm-2 text-center">
							<div class="row">
								<div class="owl-carousel2">
									<div class="item">
										<div class="col">
											<h3><a href="#">Las mejores ofertas</a></h3>
										</div>
									</div>
									<div class="item">
										<div class="col">
											<h3><a href="#">Todo al 50%</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>

        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="bread"><span><a href="home.php">Home</a></span> / <span>Checkout</span></p>
                    </div>
                </div>
            </div>
        </div>

        <form action="procesarPagar.php" method="get" action="checkout.php">
            <div class="colorlib-product">
                <div class="container">
                    <div class="row row-pb-lg">
                        <div class="col-sm-10 offset-md-1">
                            <div class="process-wrap">
                                <div class="process text-center active">
                                    <p><span>01</span></p>
                                    <h3>Shopping Cart</h3>
                                </div>
                                <div class="process text-center active">
                                    <p><span>02</span></p>
                                    <h3>Checkout</h3>
                                </div>
                                <div class="process text-center">
                                    <p><span>03</span></p>
                                    <h3>Order Complete</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <form method="get" class="colorlib-form">
                                <h2>Detalles del pedido</h2>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="country">Pa??s</label>
                                            <div class="form-field">
                                                <i class="icon icon-arrow-down3"></i>
                                                <select id="people" class="form-control">
                                                    <option value="#">Espa??a</option>
                                                    <option value="#">Portugal</option>
                                                    <option value="#">Francia</option>
                                                    <option value="#">Corea del Norte</option>
                                                    <option value="#">Nepal</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fname">Nombre</label>
                                            <input type="text" id="fname" class="form-control" placeholder="Nombre">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lname">Apellidos</label>
                                            <input type="text" id="lname" class="form-control" placeholder="Apellidos">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fname">Direcci??n</label>
                                            <input type="text" id="address" name="dir" class="form-control"
                                                placeholder="Introduce tu direcci??n">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="companyname">Ciudad</label>
                                            <input type="text" id="towncity" class="form-control" placeholder="Ciudad">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="stateprovince">Estado/Provincia</label>
                                            <input type="text" id="fname" class="form-control"
                                                placeholder="Estado / Provincia">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lname">C??digo postal</label>
                                            <input type="text" id="zippostalcode" class="form-control" placeholder="CP">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">E-mail</label>
                                            <input type="text" id="email" class="form-control"
                                                placeholder="Direcci??n email">
                                        </div>
                                    </div>
                                </div>								
                            </form>
                        </div>

                        <div class="col-sm-4 text-center">
                            <div class="total">
                                <div class="sub">
                                    <?php
                                $ide = $_SESSION['id'];
                                include "conexionSQLServer.php";
                                $consulta=$conex->prepare("SELECT nombre,cantidad,precio FROM CANTIDAD 
                                JOIN PRODUCTO on idc_producto=id_producto
                                JOIN CARRITO on id_carrito=idc_carrito AND estado='CREADO' 
                                where id_usr='$ide'");
                                $consulta->execute();
                               // echo $consulta;
                                $datos=$consulta->fetchAll(PDO::FETCH_OBJ);
                               
                               foreach ($datos as $producto) {
                                $total=$producto->precio * $producto->cantidad;
                                echo '<p><span>'.$producto->nombre.'</span> <span>'.$total.'???</span></p>';
                                }  
                                
                                $consulta2=$conex->prepare("SELECT cantidad,precio,id_carrito FROM CANTIDAD 
                                JOIN PRODUCTO on idc_producto=id_producto
                                JOIN CARRITO on id_carrito=idc_carrito AND estado='CREADO'
                                where id_usr='$ide'");
                                $consulta2->execute();
                                $datos2=$consulta2->fetchAll(PDO::FETCH_OBJ);
                                $totalCarrito=0;
                                foreach ($datos2 as $producto){
                                    $precioTotalProducto= $producto->cantidad * $producto->precio;
                                    $totalCarrito=$totalCarrito + $precioTotalProducto;
									$idCarr=$producto->id_carrito;
                                }
                                echo '</div>                                
                                <div class="grand-total">
                                    <p><span><strong>Total:</strong></span> <span>'.$totalCarrito.'???</span></p>
                                </div>
								
									<input type="hidden" name="precioTotal" value="'.$totalCarrito.'">
									<input type="hidden" name="idCarr" value="'.$idCarr.'">
                                    <input type="submit" class="btn btn-danger" value="Pagar">
									';
                                ?>

                                    


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>

        <footer id="colorlib-footer" role="contentinfo">

            <div class="copy">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <p>
                            <span>
                                Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                                </script> All rights reserved | Autores: Francesc Nova , Omar Kamand , Denny
                                Barreiro</span>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- popper -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap 4.1 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Date Picker -->
    <script src="js/bootstrap-datepicker.js"></script>
    <!-- Stellar Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>

</body>

</html>