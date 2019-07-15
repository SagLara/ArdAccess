<?php 
	session_start();
	if(!isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ArdAccess Menu</title>
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
					<span class="login100-form-title ">
						Ard Access<br>Menu <?php echo $_SESSION['usuario']['nombre'] ?>
					</span>
					<span class="login100-form-description p-b-24 p-t-20">
						Señor administrador escoja que operacion desea realizar
					</span>
					<div class="container-login100-form-btn  p-b-15 p-t-5">
						<a href="monitoreo.php"><button class="login100-form-btn">
							Monitoreo de Acceso
						</button></a>
					</div>
					<div class="container-login100-form-btn  p-b-15 p-t-5">
						<a href="consultaUsr.php"><button class="login100-form-btn">
							Consultar Usuarios
						</button>
					</div>
					<div class="container-login100-form-btn  p-b-15 p-t-5">
						<a href="registrarse.php"><button class="login100-form-btn">
							Registrar Usuario
						</button></a>
					</div>
					<div class="container-login100-form-btn  p-b-15 p-t-5">
						<a href="editar.php"><button class="login100-form-btn">
							Editar Usuario
						</button></a>
					</div>
					<div class="container-login100-form-btn p-b-15 p-t-5">
						<a href="eliminar.php"><button class="login100-form-btn">
							Eliminar Usuario
						</button></a>
					</div>
					<div class="container-login100-form-btn p-b-25 p-t-25">
						<a href="salir.php"><button class="login100-form-btn" name="salir">
							Cerrar Sesion
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