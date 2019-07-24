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
$chipid=$_GET['chipid'];
$temperatura=$_GET['temperatura'];
echo "Hola el chipid es: ";
echo $chipid;
echo ", la temperatura es de: ";
echo $temperatura;

$sql ="INSERT INTO registro (id, chipId, fecha, temperatura) VALUES (NULL, '$chipid', CURRENT_TIMESTAMP, '$temperatura')";

if (mysqli_query($enlace, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
}

mysqli_close($enlace);

echo "Datos ingresados correctamente.";
?>