<!DOCTYPE html>
<?php 
	session_start();
	if (!isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}
?>
<html>
<head>
	<title>ArdAccess Monitoreo de Acceso</title>
	<SCRIPT languaje="JavaScript">
		function pulsar() {
		alert("Estos son los accesos en la fecha ingresada");
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
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title ">
						Ard Access<br>Monitoreo de Acceso
					</span>
					<span class="login100-form-description p-b-24 p-t-20">
						Señor administrador ingrese la fecha de acceso a consultar
					</span>
					<div class="wrap-input100 validate-input" data-validate="Ingrese la fecha de acceso">
						<input class="input100" type="date" name="fechaAcs" placeholder="Fecha Accesos">
						<span class="focus-input100" data-placeholder="&#xf13c;"></span>
					</div>
					<div>
						<?php include "controller_monitoreo.php"; ?>
					</div>
					<div class="container-login100-form-btn p-b-15 p-t-5">
						<button class="login100-form-btn" type="submit" name="Buscar">
							Buscar Fecha
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