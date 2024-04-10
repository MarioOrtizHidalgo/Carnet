<?php 

require('../models/conectDatebase.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST)) {

            $conductor = $_POST['conductor'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
            $notificar = $_POST['notificar'];
            
            if (isset($_POST['conductor']) && isset($_POST['telefono']) && isset($_POST['email']) && isset($_POST['notificar'])) {
                
                $sql = $conexion->prepare("INSERT INTO carnet(driver, phone, email, notifys) VALUES(:conductor, :telefono, :email, :notificar)");
                $sql->bindParam(':conductor', $conductor);
                $sql->bindParam(':telefono', $telefono);
                $sql->bindParam(':email', $email);
                $sql->bindParam(':notificar', $notificar);
                $sql->execute();

                header("Location: ../index.php");

            } else {
                echo "Ha habido algun error con las variables.";
            }

        }

    }
?>