<?php

$servername = "localhost"; 
$username = "root"; 
$password = "";
$database = "Informacion_carnet";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sql) === TRUE) {
    echo "Base de datos creada exitosamente<br>";
} else {
    echo "Error al crear la base de datos: " . $conn->error . "<br>";
}

$conn->select_db($database);

$sql = "CREATE TABLE IF NOT EXISTS carnet (
    id INT AUTO_INCREMENT PRIMARY KEY,
    driver VARCHAR(100),
    phone VARCHAR(20),
    phone2 VARCHAR(20),
    email VARCHAR(100),
    notifys VARCHAR(200),
    start_date DATE,
    end_date DATE
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla Carnet creada exitosamente<br>";
} else {
    echo "Error al crear la tabla Carnet: " . $conn->error . "<br>";
}

$conn->close();
?>

