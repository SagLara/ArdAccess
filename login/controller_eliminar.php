<?php 
	session_start();
	if(!isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}
	require 'conexion.php';
	
	$idUser="";
	$idUser = $mysqli->real_escape_string($_POST['idUser']);

	$sql = "DELETE FROM users WHERE IDUSER='$idUser'";

	if ($mysqli->query($sql) === TRUE) {
		echo json_encode(array('error'=>false));
	} else {
		echo json_encode(array('error'=>true));	
	}
	$mysqli->close();
?>