<?php 
	session_start();
	if(!isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}
	require 'conexion.php';
	
	$idUser="";
	$idUser = $mysqli->real_escape_string($_POST['idUser']);
	$nombre = $mysqli->real_escape_string($_POST['nombreUS']);
	$fechaNa = $mysqli->real_escape_string($_POST['fechaNac']);

	$sql = "UPDATE users SET NOMBRE='$nombre' ,f_nacimiento='$fechaNa' WHERE IDUSER='$idUser'";
	$ayudita="SELECT IDUSER FROM users WHERE IDUSER='$idUser'";
	$aux=$mysqli->query($ayudita);
	if ($mysqli->query($sql) === TRUE) {
		echo json_encode(array('error'=>false));
	} else if($aux->num_rows>0) {
		echo json_encode(array('error'=>true));	
	}
	$mysqli->close();
?>