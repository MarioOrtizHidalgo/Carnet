<?php 

$host = "localhost";
$usuario = "root";
$contraseña = "";
$database = "Informacion_carnet";

try {
    
    $conexion = new PDO("mysql:host=$host;dbname=$database", $usuario, $contraseña);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch(PDOException $e) {

    die("La conexión fallo: ". $e->getMessage());

}

?>