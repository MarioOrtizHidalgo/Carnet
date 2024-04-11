<?php 

require_once('models/conectDatebase.php');
$id = $_GET['id'];

$consulta = $conexion->query("SELECT * FROM Carnet WHERE id=$id");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Link Bootstrap-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Editar Carnet</title>
</head>
<body>
    
        <form class="col-4 p-4 m-auto" method="POST" action="controllers/editCarnet.php">
            <h3 class="text-center fw-bold p-3">Modificar Conductor</h3>
            <input type="hidden" name="id" value="<?php echo "$id"; ?>">
            <?php 
                while ($datos = $consulta->fetch(PDO::FETCH_OBJ)) {?>

                <div class="mb-3">
                    <label for="exampleInputDriver" class="form-label">Conductor</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="conductor" value="<?php echo "$datos->driver"; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPhone" class="form-label">Teléfono</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="telefono" value="<?php echo "$datos->phone"; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" name="email" value="<?php echo "$datos->email"; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputNotify" class="form-label">Notificar</label>
                    <select class="form-select" aria-label="Default select example" name="notificar" value="<?php echo "$datos->notifys"; ?>" required>
                        <option value="1">1 month</option>
                        <option value="2">2 months</option>
                        <option value="3">3 months</option>
                    </select>
                </div>

            <?php }
            
            ?>
            
            <button type="submit" class="btn btn-primary" name="enviar" value="enviar">Enviar</button>
        </form>

</body>
</html>