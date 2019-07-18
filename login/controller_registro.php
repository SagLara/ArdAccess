<?php 
	// if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
	require 'conexion.php';
	
	$idUser="";
	$idUser = $mysqli->real_escape_string($_POST['idUser']);
	$nombre = $mysqli->real_escape_string($_POST['nombreUs']);
	$fechaNa = $mysqli->real_escape_string($_POST['fechaNac']);

	$sql = "INSERT INTO users (IDUSER,NOMBRE,f_nacimiento,FECHA_Registros) 
	VALUES ('$idUser','$nombre','$fechaNa',NOW())";

	if ($mysqli->query($sql) === TRUE) {
		echo json_encode(array('error'=>false));
	} else {
		echo json_encode(array('error'=>true));	
	}
	$mysqli->close();
?>