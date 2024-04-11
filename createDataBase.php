<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu servidor MySQL está en otro lugar
$username = "root"; // Cambia esto al nombre de usuario de tu base de datos
$password = ""; // Cambia esto a la contraseña de tu base de datos
$database = "Informacion_carnet"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Crear la base de datos si no existe
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sql) === TRUE) {
    echo "Base de datos creada exitosamente<br>";
} else {
    echo "Error al crear la base de datos: " . $conn->error . "<br>";
}

// Seleccionar la base de datos
$conn->select_db($database);

// Crear la tabla Carnet
$sql = "CREATE TABLE IF NOT EXISTS carnet (
    id INT AUTO_INCREMENT PRIMARY KEY,
    driver VARCHAR(100),
    phone VARCHAR(20),
    email VARCHAR(100),
    notifys ENUM('Sin notificar', '1 mes', '3 meses', '6 meses'),
    start_date DATE,
    end_date DATE
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla Carnet creada exitosamente<br>";
} else {
    echo "Error al crear la tabla Carnet: " . $conn->error . "<br>";
}


// Cerrar la conexión
$conn->close();
?>

