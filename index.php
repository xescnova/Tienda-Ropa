<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- All the files that are required -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!-- Theme style  -->
<link rel="stylesheet" href="css/style.css">

<!-- Login -->
<script src="js/login.js"></script>

<?php
    include "conexionSQLServer.php"
?>
<!-- LOGIN FORM -->
<div class="text-center" style="padding:50px 0">
    <div class="logo">Login</div>
    <!-- Main Form -->
    <div class="login-form-1">
        <form id="login-form" class="text-left" action="procesarLogin.php" method="post">
            <div class="login-form-main-message"></div>
            <div class="main-login-form">
                <div class="login-group">
                    <div class="form-group">
                        <label for="lg_username" class="sr-only">Usuario</label>
                        <input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <label for="lg_password" class="sr-only">Contraseña</label>
                        <input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="Contraseña">
                    </div>
                    <div class="form-group login-group-checkbox">
                        <input type="checkbox" id="lg_remember" name="lg_remember">
                        <label for="lg_remember">Recordar</label>
                    </div>
                </div>
                <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
            </div>
        </form>
    </div>
    <!-- end:Main Form -->
</div>

<!-- REGISTRATION FORM -->
<div class="text-center" style="padding:50px 0">
    <div class="logo">Registrarse</div>
    <!-- Main Form -->
    <div class="login-form-1">
        <form id="register-form" class="text-left" action="procesarRegistrar.php" method="post">
            <div class="login-form-main-message"></div>
            <div class="main-login-form">
                <div class="login-group">
                    <div class="form-group">
                        <label for="reg_username" class="sr-only">Email address</label>
                        <input type="text" class="form-control" id="reg_username" name="reg_username" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <label for="reg_apellido" class="sr-only">Apellido</label>
                        <input type="text" class="form-control" id="reg_apellido" name="reg_apellido" placeholder="Apellido">
                    </div>
                    <div class="form-group">
                        <label for="reg_password" class="sr-only">Password</label>
                        <input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <label for="reg_password_confirm" class="sr-only">Password Confirm</label>
                        <input type="password" class="form-control" id="reg_password_confirm" name="reg_password_confirm" placeholder="Repetir Contraseña">
                    </div>

                    <div class="form-group">
                        <label for="reg_email" class="sr-only">Email</label>
                        <input type="text" class="form-control" id="reg_email" name="reg_email" placeholder="Email">
                    </div>


                    <div class="form-group login-group-checkbox">
                        <input type="radio" class="" name="reg_gender" id="male" placeholder="username">
                        <label for="male">Hombre</label>

                        <input type="radio" class="" name="reg_gender" id="female" placeholder="username">
                        <label for="female">Mujer</label>
                    </div>

                    <div class="form-group login-group-checkbox">
                        <input type="checkbox" class="" id="reg_agree" name="reg_agree">
                        <label for="reg_agree">Acepto los<a href="#"> términos</a></label>
                    </div>
                </div>
                <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
            </div>
        </form>
    </div>
    <!-- end:Main Form -->
</div>