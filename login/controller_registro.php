<?php 
	// if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
	session_start();
	if(!isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}	
	require 'conexion.php';
	
	
	$idUser="";
	$nombre="";
	$fechaNa="";
	$idUser = $mysqli->real_escape_string($_POST['idUser']);
	$nombre = $mysqli->real_escape_string($_POST['nombreUs']);
	$fechaNa = $mysqli->real_escape_string($_POST['fechaNac']);

	
	$sql = "INSERT INTO users (IDUSER,NOMBRE,f_nacimiento,FECHA_Registros) 
	VALUES ('$idUser','$nombre','$fechaNa',NOW())";
	
	$result=mysqli_query($mysqli,"SELECT count(*) as huella from huellas");
	$data=mysqli_fetch_assoc($result);
	//echo "La huella correspondiente sera: ".(($data['huella'])+15);
	$numeroHuella=($data['huella'])+15;
	
	$aux ="INSERT INTO huellas (IDHuella, HUELLA,IDUSER) VALUES (NULL,'$numeroHuella' , '$idUser')";

	if ($mysqli->query($sql) === TRUE && $mysqli->query($aux)=== TRUE ) {
		echo json_encode(array('error'=>false));
	} else {
		echo json_encode(array('error'=>true));	
	}
	$mysqli->close();
?>