<html>

<head>
    <title>Tienda Ropa</title>
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
                            <div id="colorlib-logo"><a href="home.html">Tienda de ropa</a></div>
                        </div>
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
                                <li class="active"><a href="home.html">Inicio</a></li>
                                <li class="has-dropdown">
                                    <a href="men.html">Men</a>
                                    <ul class="dropdown">
                                        <li><a href="product-detail.html">Product Detail</a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="order-complete.html">Order Complete</a></li>
                                        <li><a href="add-to-wishlist.html">Wishlist</a></li>
                                    </ul>
                                </li>
                                <li class="cart"><a href="cart.html"><i class="icon-shopping-cart"></i> Carrito [0]</a></li>
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
        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(images/img_bg_1.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                    <div class="slider-text-inner">
                                        <div class="desc">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(images/img_bg_2.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                    <div class="slider-text-inner">
                                        <div class="desc">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(images/img_bg_3.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                    <div class="slider-text-inner">
                                        <div class="desc">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <!--Productos-->
        <div class="colorlib-product">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                        <h2>Todos los productos</h2>
                    </div>
                </div>
                <div class="row row-pb-md">
                    <?php
                    require_once 'fetchMongo.php';
                    fetchLimit(16);
                    /*

                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="https://i.ibb.co/smGK0QH/puma1.webp" class="img-fluid" alt="" width="60%">
                            </a>
                            <div class="desc">
                                <h2><a href="#">CAMISETA NIKE ESTáTICA</a></h2>
                                <span class="price">$139.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="images/item-2.jpg" class="img-fluid" alt="">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Women's Minam Meaghan</a></h2>
                                <span class="price">$139.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="images/item-3.jpg" class="img-fluid" alt="">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Men's Taja Commissioner</a></h2>
                                <span class="price">$139.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="images/item-4.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Russ Men's Sneakers</a></h2>
                                <span class="price">$139.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="images/item-5.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                                <span class="price">$139.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="images/item-6.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                                <span class="price">$139.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="images/item-7.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                                <span class="price">$139.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="images/item-8.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                                <span class="price">$139.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="images/item-9.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                                <span class="price">$139.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="images/item-10.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                                <span class="price">$139.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="images/item-11.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                                <span class="price">$139.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="images/item-12.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                                <span class="price">$139.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="images/item-13.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                                <span class="price">$139.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="images/item-14.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                                <span class="price">$139.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="images/item-15.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                                <span class="price">$139.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="images/item-16.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                                <span class="price">$139.00</span>
                            </div>
                        </div>
                    </div>
                    */
                    ?>
                </div>
            </div>
        </div>
        <!-- Imágenes de marcas -->
        <div class="colorlib-partner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                        <h2>Las mejores Marcas</h2>
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