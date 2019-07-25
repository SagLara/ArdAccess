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

	echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos login es genial." . PHP_EOL;


	$datos=$_GET;
	$huella=$_GET['huellaid'];
	echo "Hola tu coincidencia de huella es: ";
	echo $huella;

	$aux ="SELECT IDUSER FROM huellas WHERE HUELLA='$huella'";
	$result=mysqli_query($enlace,$aux);
	$data=mysqli_fetch_assoc($result);
	echo "Este es el Usuario: ".(($data['IDUSER']));
	$idUser=$data['IDUSER'];
	$resultado=$enlace->query($aux);
	if ($huella!=0) {
		echo "Se creara el registro de acceso al usuario";
		$sql ="INSERT INTO registros (IDRegistros, HORA_USO,ACCESO,IDUSER) VALUES (NULL, CURRENT_TIMESTAMP , 'A' , '$idUser')";
		if (mysqli_query($enlace, $sql)) {
			echo "Nuevo registro creado satisfactoriamente";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
		}
	} else {
		echo "Se creara el registro de acceso al usuario";
		$sql ="INSERT INTO registros (IDRegistros, HORA_USO,ACCESO,IDUSER) VALUES (NULL, CURRENT_TIMESTAMP , 'D' , '0')";
		if (mysqli_query($enlace, $sql)) {
			echo "Nuevo registro creado satisfactoriamente";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
		}
	}

	mysqli_close($enlace);

	echo "Datos ingresados correctamente.";
?>