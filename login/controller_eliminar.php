<?php 
	// if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
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