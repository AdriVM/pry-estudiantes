<div class="container">
  <h3 class="titulo">Listado de Estudiantes<hr></h3>

  <div class="panel panel-success">
    <div class="panel-heading">
      <h5 class="panel-tittle">Listado de Estudiantes</h5>
    </div>
    <div class="panel-body">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Promedio</th>
            <th>Column heading</th>
          </tr>
        </thead>
        <tbody>
          <?php while($row = mysqli_fetch_array($datos)){ ?>
          <tr>
            <!-- Aqui video 18 min 8.30 poner avatars -->
            <td><img src="<?php echo URL; ?>Views/template/imagenes/avatars/<?php echo $row['imagen']; ?>" alt=""></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['edad']; ?></td>
            <td><?php echo $row['promedio']; ?></td>
            <td>Column content</td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
