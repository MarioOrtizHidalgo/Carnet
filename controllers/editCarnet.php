<?php 

require_once('../models/conectDatebase.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['enviar'])) {

        $id = $_POST['id'];
        $conductor = $_POST['conductor'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $notificar = $_POST['notificar'];

        $consulta = $conexion->query(" UPDATE Carnet SET driver='$conductor', phone='$telefono', email='$email', notifys='$notificar' WHERE id=$id ");

        header("Location: ../index.php");

    } else {

        echo "Ha habido un error";

    }
}

?>