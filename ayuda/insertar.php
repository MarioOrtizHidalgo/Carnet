<?php 

    require("conectar.php");

    
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];

    $consulta = $conexion->prepare("INSERT INTO usuarios (usuarios_nombre, usuarios_contrasena) VALUES (:nombre, :contrasena)");

    $consulta->execute(array(':nombre' => $nombre, ':contrasena' => $contrasena));

    sleep(1.5);

    header("Location: login.php");

?>