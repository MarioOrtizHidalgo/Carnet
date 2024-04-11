<?php 

require_once('../models/conectDatebase.php');

    if (isset($_GET['id']) && !empty($_GET['id'])) {

        $id = $_GET['id'];
        $borrar = $conexion->query("DELETE FROM Carnet WHERE id=$id");

        header("Location: ../index.php");

    } else {
        echo "Ha habido un error";
    }

?>
