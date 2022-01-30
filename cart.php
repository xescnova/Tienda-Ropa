<?php session_start(); ?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
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

    <div class="colorlib-loader"></div>

    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-md-9">
                            <div id="colorlib-logo"><a href="home.php">Tienda Sancionados</a></div>
                        </div>
                        <!-- Search -->
                        <div class="col-sm-5 col-md-3">
                            <form action="#" class="search-wrap">
                                <div class="form-group">
                                    <input type="search" class="form-control search" placeholder="Search">
                                    <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
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
                                <li><a href="children.php">Niños</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li class="cart"><a href="cart.html"><i class="icon-shopping-cart"></i> Cart [0]</a></li>
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
                        <p class="bread"><span><a href="home.html">Home</a></span> / <span>Shopping Cart</span></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="colorlib-product">
            <div class="container">
                <div class="row row-pb-lg">
                    <div class="col-md-10 offset-md-1">
                        <div class="process-wrap">
                            <div class="process text-center active">
                                <p><span>01</span></p>
                                <h3>Shopping Cart</h3>
                            </div>
                            <div class="process text-center">
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
                <div class="row row-pb-lg">
                    <div class="col-md-12">
                        <div class="product-name d-flex">
                            <div class="one-forth text-left px-4">
                                <span>Detalles del pedido</span>
                            </div>
                            <div class="one-eight text-center">
                                <span>Precio</span>
                            </div>
                            <div class="one-eight text-center">
                                <span>Cantidad</span>
                            </div>
                            <div class="one-eight text-center">
                                <span>Total</span>
                            </div>
                            <div class="one-eight text-center px-4">
                                <span>Eliminar</span>
                            </div>
                        </div>
                        <?php
                         include "conexionSQLServer.php";
                         $consulta=$conex->prepare("SELECT * FROM carrito JOIN cantidad 
                         on idc_carrito=id_carrito JOIN producto 
                         on id_producto=idc_producto 
                         where id_usr='6'");
                         $consulta->execute();
                         $datos=$consulta->fetchAll(PDO::FETCH_OBJ);
                         $nom=$datos[0]->nombre;
                         $precio=$datos[0]->precio;
                         $cantidad=$datos[0]->cantidad;
                         $total=$cantidad *$precio;
                         echo '<div class="product-cart d-flex">
                         <div class="one-forth">
                             <div class="product-img" style="background-image: url(images/item-6.jpg);">
                             </div>
                             <div class="display-tc">
                                 <h3>'.$nom.'</h3>
                             </div>
                         </div>
                         <div class="one-eight text-center">
                             <div class="display-tc">
                                 <span class="price">'.$precio.'</span>
                             </div>
                         </div>
                         <div class="one-eight text-center">
                             <div class="display-tc">
                                 <input type="text" id="quantity" name="quantity" class="form-control input-number text-center" value="1" min="1" max="100">
                             </div>
                         </div>
                         <div class="one-eight text-center">
                             <div class="display-tc">
                                 <span class="price">'.$total.'</span>
                             </div>
                         </div>
                         <div class="one-eight text-center">
                             <div class="display-tc">
                                 <a href="#" class="closed"></a>
                             </div>
                         </div>
                     </div>';
                     
                        ?>
                        <div class="product-cart d-flex">
                            <div class="one-forth">
                                <div class="product-img" style="background-image: url(images/item-6.jpg);">
                                </div>
                                <div class="display-tc">
                                    <h3>Product Name</h3>
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <span class="price">$68.00</span>
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number text-center" value="1" min="1" max="100">
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <span class="price">$120.00</span>
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <a href="#" class="closed"></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-cart d-flex">
                            <div class="one-forth">
                                <div class="product-img" style="background-image: url(images/item-7.jpg);">
                                </div>
                                <div class="display-tc">
                                    <h3>Product Name</h3>
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <span class="price">$68.00</span>
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <form action="#">
                                        <input type="text" name="quantity" class="form-control input-number text-center" value="1" min="1" max="100">
                                    </form>
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <span class="price">$120.00</span>
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <a href="#" class="closed"></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-cart d-flex">
                            <div class="one-forth">
                                <div class="product-img" style="background-image: url(images/item-8.jpg);">
                                </div>
                                <div class="display-tc">
                                    <h3>Product Name</h3>
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <span class="price">$68.00</span>
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number text-center" value="1" min="1" max="100">
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <span class="price">$120.00</span>
                                </div>
                            </div>
                            <div class="one-eight text-center">
                                <div class="display-tc">
                                    <a href="#" class="closed"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-pb-lg">
                    <div class="col-md-12">
                        <div class="total-wrap">
                            <div class="row">
                                <div class="col-sm-8">

                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="total">
                                        <div class="sub">
                                            <p><span>Subtotal:</span> <span>$200.00</span></p>
                                            <p><span>Discount:</span> <span>$45.00</span></p>
                                        </div>
                                        <div class="grand-total">
                                            <p><span><strong>Total:</strong></span> <span>$450.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="colorlib-partner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                        <h2>Trusted Partners</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col partner-col text-center">
                        <img src="images/brand-1.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
                    </div>
                    <div class="col partner-col text-center">
                        <img src="images/brand-2.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
                    </div>
                    <div class="col partner-col text-center">
                        <img src="images/brand-3.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
                    </div>
                    <div class="col partner-col text-center">
                        <img src="images/brand-4.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
                    </div>
                    <div class="col partner-col text-center">
                        <img src="images/brand-5.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
                    </div>
                </div>
            </div>
        </div>

        <footer id="colorlib-footer" role="contentinfo">

            <div class="copy">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <p>
                            <span>
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | Autores: Francesc Nova , Omar Kamand , Denny Barreiro</span>
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