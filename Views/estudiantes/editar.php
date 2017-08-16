<div class="container">
  <h3 class="tittle">Editar Estudiante</h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h5 class="panel-title">Editar Estudiante</h5>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-3">
          <div class="panel panel-default">
            <div class="panel-body">
              <img class="img-responsive" src="<?php echo URL; ?>Views/template/imagenes/avatars/avatar1.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="inputEmail" class="control-label">Nombre del Estudiante</label>
              <input class="form-control" type="text" name="nombre" required>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="control-label">Edad</label>
              <input class="form-control" type="number" name="edad" required>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="control-label">Promedio</label>
              <input class="form-control" type="number" name="promedio" required>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="control-label">Seccion</label>
              <select class="form-control" name="id_seccion">
                <?php while($row = mysqli_fetch_array($variable)){ ?>
                  <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success">Registrar</button>
              <button type="reset" class="btn btn-warning">Borrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
