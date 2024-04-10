<?php

    include("header.php");

?>

<div class="container my-3">
    <div class="row">
        <div class="col-6">

        <form action="insertar_imagenes.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="descripcion">Descripcion</label>
    <input type="text" class="form-control" id="descripcion" placeholder="Descripcion">
  </div>
  <div class="mb-3">
  <label for="imagen" class="form-label">Inserte su imagen</label>
  <input class="form-control" type="file" id="imagen">
</div>
  <button type="submit" class="btn btn-primary">Subir</button>
</form>

        </div>
        <div class="col-6">

        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Imagen</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mario</td>
      <td>Descripcion breve</td>
      <td>Fondo.jpg</td>
    </tr>
  </tbody>
</table>

        </div>
    </div>
</div>