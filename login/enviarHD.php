<?php
$enlace = mysqli_connect("localhost", "root", "", "login");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos login es genial." . PHP_EOL;

$datos=$_GET;
$huella=$_GET['FingerPrintID'];
echo "Hola tu coincidencia de huella es: ";
echo $huella;

$aux ="SELECT IDUSER FROM huellas WHERE IDHuella='$huella' AND users.IDUSER=huellas.IDUSER";
$resultado=$mysqli->query($aux);
if ($row = $resultado->fetch_row()) {
    echo "Se creara el registro de acceso al usuario";
	$sql ="INSERT INTO registros (IDRegistros, HORA_USO,ACCESO,IDUSER) VALUES (NULL, CURRENT_TIMESTAMP , 'A' , '$row['IDUSER']')";
	if (mysqli_query($enlace, $sql)) {
		echo "Nuevo registro creado satisfactoriamente";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
	}
} else {
	echo "Se creara el registro de acceso al usuario";
	$sql ="INSERT INTO registros (IDRegistros, HORA_USO,ACCESO,IDUSER) VALUES (NULL, CURRENT_TIMESTAMP , 'D' , '-1')";
	if (mysqli_query($enlace, $sql)) {
		echo "Nuevo registro creado satisfactoriamente";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
	}
}

mysqli_close($enlace);

echo "Datos ingresados correctamente.";
?>