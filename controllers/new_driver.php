<?php 

require('../models/conectDatebase.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST)) {

            $conductor = $_POST['conductor'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
            $notificar = $_POST['notificar'];
            $fechaInicio = $_POST['fechainicio'];
            $fechaFin = $_POST['fechafin'];
            
            if (isset($_POST['conductor']) && isset($_POST['telefono']) && isset($_POST['email']) && isset($_POST['notificar']) && isset($_POST['fechainicio']) && isset($_POST['fechafin']) ) {
                
                $sql = $conexion->prepare("INSERT INTO carnet(driver, phone, email, notifys, start_date, end_date) VALUES(:conductor, :telefono, :email, :notificar, :fechainicio, :fechafin)");
                $sql->bindParam(':conductor', $conductor);
                $sql->bindParam(':telefono', $telefono);
                $sql->bindParam(':email', $email);
                $sql->bindParam(':notificar', $notificar);
                $sql->bindParam(':fechainicio', $fechaInicio);
                $sql->bindParam(':fechafin', $fechaFin);
                $sql->execute();

                header("Location: ../index.php");

            } else {
                echo "Ha habido algun error con las variables.";
            }

        }

    }
?>