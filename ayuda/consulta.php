<?php 

    require("conectar.php");

    $nombre = isset($_POST['nombre']) ? $_POST['nombre']: '';
    $contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : '';

    $consulta = $conexion->query("SELECT * FROM usuarios WHERE usuarios_nombre = :nombre AND usuarios_contrasena = :contrasena");
    $consulta->bindValue(':nombre', $nombre, PDO::PARAM_STR);
    $consulta->bindValue(':contrasena', $contrasena, PDO::PARAM_STR);

    $consulta->execute();

    sleep(1.5);

    header("Location: index.php");

?>