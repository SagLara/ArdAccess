<?php
	session_start();
	if(!isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}

	$enlace = mysqli_connect("localhost", "root", "", "login");

	if (!$enlace) {
		echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
		echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
		echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
		exit;
	}

	//echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos login es genial." . PHP_EOL;
	
	$result=mysqli_query($enlace,"SELECT count(*) as huella from huellas");
	$data=mysqli_fetch_assoc($result);
	echo "La huella correspondiente sera: ".(($data['huella'])+15);

	mysqli_close($enlace);

?>