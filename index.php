<?php 

require_once('models/conectDatebase.php');

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Link Bootstrap-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Iconos-->
    <script src="https://kit.fontawesome.com/754a7722d7.js" crossorigin="anonymous"></script>
    <title>Información Carnet</title>
</head>
<body>
    
    <h1 class="text-center fw-bold py-4">Informacion de Carnets</h1>

    <div class="container-fluid row">

        <form class="col-4 p-4" method="POST" action="controllers/new_driver.php">
            <h3 class="text-center fw-bold p-3">Nuevo Conductor</h3>
            <div class="mb-3">
                <label for="exampleInputDriver" class="form-label">Conductor</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="conductor" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPhone" class="form-label">Teléfono</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="telefono" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputPassword1" name="email" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputNotify" class="form-label">Notificar</label>
                <select class="form-select" aria-label="Default select example" name="notificar" required>
                    <option value="1">1 month</option>
                    <option value="2">2 months</option>
                    <option value="3">3 months</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="enviar" value="enviar">Enviar</button>
        </form>

        <div class="col-8 p-4">
            <h3 class="text-center fw-bold p-3">Datos de los conductores</h3>
            <table class="table">
                <thead>
                  <tr class="bg-info">
                    <th scope="col">ID</th>
                    <th scope="col">Conductor</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Notificar</th>
                    <th scope="col">FechaInicio</th>
                    <th scope="col">FechaFin</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>

                <?php 
                        $consulta = $conexion->query("SELECT * FROM Carnet");
                        while ($datos = $consulta->fetch(PDO::FETCH_OBJ)) {?>
                            <tr>
                                <th scope="row"><?php echo $datos->id; ?></th>
                                <td><?php echo $datos->driver; ?></td>
                                <td><?php echo $datos->email; ?></td>
                                <td><?php echo $datos->phone; ?></td>
                                <td><?php echo $datos->notifys; ?></td>
                                <td><?php echo $datos->start_date; ?></td>
                                <td><?php echo $datos->end_date; ?></td>
                                <td>
                                    <a class="btn btn-warning" href="editCarnet.php?id=<?php echo "$datos->id"; ?>"><i class="fa-solid fa-file-pen"></i></a>
                                    <a class="btn btn-danger" href=""><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                        

                  
                </tbody>
            </table>

        </div>

    </div>


</body>
</html>