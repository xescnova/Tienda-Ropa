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
                        <p class="bread"><span><a href="home.php">Home</a></span> / <span>Contact</span></p>
                    </div>
                </div>
            </div>
        </div>


        <div id="colorlib-contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Contact Information</h3>
                        <div class="row contact-info-wrap">
                            <div class="col-md-3">
                                <p><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                        </svg></span> <a href="https://github.com/xescnova/SGBD_Tienda_Ropa">Github Tienda de Ropa</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-wrap">
                            <h3>Contáctanos</h3>
                            <form action="#" class="contact-form">
                                <div class="row">
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
                                    <div class="w-100"></div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" id="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="subject">Asunto</label>
                                            <input type="text" id="subject" class="form-control" placeholder="Asunto del mensaje">
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Mensaje</label>
                                            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Escribe tu mensaje"></textarea>
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="submit" value="Send Message" class="btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="map" class="colorlib-map"></div>
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
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
    <script src="js/google_map.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>

</body>

</html>