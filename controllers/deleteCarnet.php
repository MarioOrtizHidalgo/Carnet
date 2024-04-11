<?php 

require_once('../models/conectDatebase.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['id']) && !empty($_GET['id'])) {

        $id = $_GET['id'];
        $borrar = $conexion->query("DELETE FROM Carnet WHERE id=$id");

        var_dump( $borrar );

        if ($borrar == 1) {
            echo "<div class='alert alert-success'>Se ha borrado correctamente el conductor</div>";
        } else {
            echo "<div class='alert alert-danger'>No se ha podido borrar el conductor</div>";
        }

    } else {
        echo "Ha habido un error";
    }
}

?>
