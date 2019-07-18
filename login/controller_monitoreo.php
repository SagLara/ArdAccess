<?php 
	// if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
	require 'conexion.php';
	
	$fechaAcs="";
	$fechaAcs = $mysqli->real_escape_string($_POST['fechaAcs']);
	
	$sql = "SELECT * FROM registros WHERE DATE(HORA_USO)='$fechaAcs'";
	$resultado=$mysqli->query($sql);
	
	if ($resultado->num_rows > 0) {
		echo "<table class='table table-bordered table-hover'><thead><th>ID</th><th>Usuario</th><th>Hora Acceso</th>Acceso</thead>";
	
		while($row = $resultado->fetch_assoc()) {
			echo "<tr><td>".$row["IDRegistros"]."</td><td>".$row["IDUSER"]."</td><td>".$row["HORA_USO"]."</td><td>".$row["ACCESO"]."</td></tr>";
		}
		echo "</table>";
	} else {
		echo "<p class='alert alert-primary'>No hay resultados</p>";
	}
	$mysqli->close();
?>