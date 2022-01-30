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
						<p class="bread"><span><a href="home.php">Home</a></span> / <span>Checkout</span></p>
					</div>
				</div>
			</div>
		</div>


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
						<form method="post" class="colorlib-form">
							<h2>Detalles del pedido</h2>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="country">País</label>
										<div class="form-field">
											<i class="icon icon-arrow-down3"></i>
											<select name="people" id="people" class="form-control">
												<option value="#">España</option>
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
										<label for="fname">Dirección</label>
										<input type="text" id="address" class="form-control" placeholder="Introduce tu dirección">
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
										<input type="text" id="fname" class="form-control" placeholder="Estado / Provincia">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="lname">Código postal</label>
										<input type="text" id="zippostalcode" class="form-control" placeholder="CP">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="email">E-mail</label>
										<input type="text" id="email" class="form-control" placeholder="Dirección email">
									</div>
								</div>
							</div>
						</form>
					</div>

					<div class="col-lg-4">
						<div class="row">
							<div class="col-md-12">
								<div class="cart-detail">
									<h2>Cart Total</h2>
									<ul>
										<li>
											<span>Subtotal</span> <span>$100.00</span>
											<ul>
												<li><span>1 x Product Name</span> <span>$99.00</span></li>
												<li><span>1 x Product Name</span> <span>$78.00</span></li>
											</ul>
										</li>
										<li><span>Shipping</span> <span>$0.00</span></li>
										<li><span>Order Total</span> <span>$180.00</span></li>
									</ul>
								</div>
							</div>

							
						</div>
						<div class="row">
							<div class="col-md-12 text-center">
								<p><a href="#" class="btn btn-primary">Confirmar pedido</a></p>
							</div>
						</div>
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