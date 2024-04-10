<?php

    require("conectar.php");

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    $consulta = $conexion->prepare("INSERT INTO imagen (imagen_id, imagen_nombre, imagen_descripcion, imagen_imagen) VALUES (NULL, '.$nombre.', '.$descripcion.', )");

    if ($consulta->execute()) {
        echo "La imagen se ha subido";
    } else {
        echo "Ha habido un error";
    }

?>