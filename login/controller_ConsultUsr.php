<?php 
	
	session_start();
	if(!isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}	
	require 'conexion.php';
	
	$idUser="";
	$idUser = $mysqli->real_escape_string($_POST['idUser']);
	
	$sql = "SELECT IDUSER,NOMBRE,FECHA_Registros FROM users WHERE IDUSER='$idUser'";
	$resultado=$mysqli->query($sql);
	
	if ($resultado->num_rows > 0) {
		echo "<table class='table table-bordered table-hover'><thead><th>ID</th><th>Nombre</th><th>Registro</th></thead>";
	
		while($row = $resultado->fetch_assoc()) {
			echo "<tr><td>".$row["IDUSER"]."</td><td>".$row["NOMBRE"]."</td><td>".$row["FECHA_Registros"]."</td></tr>";
		}
		echo "</table>";
	} else {
		echo "<p class='alert alert-primary'>No hay resultados</p>";
	}
	$mysqli->close();
?>