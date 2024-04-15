<?php 

require('../models/conectDatebase.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST)) {

            $conductor = $_POST['conductor'];
            $telefono = $_POST['telefono'];
            $telefono2 = $_POST['telefono2'];
            $email = $_POST['email'];

                    $selectedOptions = $_POST["notificar"];
                    foreach ($selectedOptions as $option) {
                        switch ($option) {
                            case "1":
                                $notificacion = "Sin notificar<br>" . $notificacion;
                                break;
                            case "2":
                                $notificacion = "1 semana<br>"  . $notificacion;
                                break;
                            case "3":
                                $notificacion = "2 semanas<br>"  . $notificacion;
                                break;
                            case "4":
                                $notificacion = "1 mes<br>" . $notificacion;
                                break;
                            case "5":
                                $notificacion = "3 meses<br>" . $notificacion;
                                break;
                            case "6":
                                $notificacion = "6 meses<br>" . $notificacion;
                                break;
                            default:
                                $notificacion = "Opción desconocida<br>" . $notificacion;
                                break;
                        }

                    }
            }
            
            $fechaInicio = $_POST['fechainicio'];
            $fechaFin = $_POST['fechafin'];
            
              $sql = $conexion->prepare("INSERT INTO carnet(driver, phone, phone2, email, notifys, start_date, end_date) VALUES(:conductor, :telefono, :telefono2, :email, :notificacion, :fechainicio, :fechafin)");
                $sql->bindParam(':conductor', $conductor);
                $sql->bindParam(':telefono', $telefono);
                $sql->bindParam(':telefono2', $telefono);
                $sql->bindParam(':email', $email);
                $sql->bindParam(':notificacion', $notificacion);
                $sql->bindParam(':fechainicio', $fechaInicio);
                $sql->bindParam(':fechafin', $fechaFin);
                $sql->execute();

                header("Location: ../index.php");

        }
?>