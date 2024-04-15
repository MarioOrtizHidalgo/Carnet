<?php 

require_once('../models/conectDatebase.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['enviar'])) {

        $id = $_POST['id'];
        $conductor = $_POST['conductor'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $selectedOptions = implode('<br>', $_POST['notificar']);
        $fechaInicio = $_POST['fechainicio'];
        $fechaFin = $_POST['fechafin'];

        $consulta = $conexion->query(" UPDATE carnet SET driver='$conductor', phone='$telefono', email='$email', notifys='$selectedOptions', start_date='$fechaInicio', end_date='$fechaFin' WHERE id=$id ");

        header("Location: ../index.php");

    } else {

        echo "Ha habido un error";

    }
}

?>