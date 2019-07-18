<!DOCTYPE html>
<?php 

	session_start();
	if(!isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}

?>
<html>
<head>
	<title>ArdAccess Registrar Usuario</title>
	<SCRIPT languaje="JavaScript">
		function pulsar() {
		alert("El usuario ha sido registrado satisfactoriamente");
		}
	</SCRIPT>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/enter.png"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-03.jpg');">
			
			<div class="wrap-login100">
				<form class="login100-form validate-form" id="formRegistro" method="post">
					<span class="login100-form-title ">
						Ard Access<br>Registrar Usuario
					</span>
					<span class="login100-form-description p-b-24 p-t-20">
						Señor administrador a continuacion ingrese los datos
					</span>
					<div class="wrap-input100 validate-input" data-validate="Ingrese su No. Identificacion">
						<input class="input100" type="text" name="idUser" placeholder="No. Identificacion">
						<span class="focus-input100" data-placeholder="&#xf183;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Ingrese su Nombre de Usuario">
						<input class="input100" type="text" name="nombreUs" placeholder="Nombre">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Ingrese su huella dactilar">
						<input class="input100" type="password" name="pass" placeholder="Huella Dactilar">
						<span class="focus-input100" data-placeholder="&#xf1c8;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Ingrese su fecha de nacimiento">
						<input class="input100" type="date" name="fechaNac" placeholder="Fecha de Nacimiento">
						<span class="focus-input100" data-placeholder="&#xf122;"></span>
					</div>
					<div class="container-login100-form-btn p-b-15 p-t-5">
						<button class="login100-form-btn" type="submit" name="registrarse">
							Registrar
						</button>
					</div>
				</form>
				<div class="container-login100-form-btn p-b-15 p-t-5">
					<a href="menu.php"><button class="login100-form-btn">
						Volver
					</button></a>
				</div>
			</div>
		</div>
	</div>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>