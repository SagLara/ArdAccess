<?php 
	
	$mysqli = new mysqli('localhost','root','','login');
	
	if($mysqli->connect_errno):
		echo "Error al conectarse con MYSQL Error:".$mysqli->connect_error;
	endif;
?>