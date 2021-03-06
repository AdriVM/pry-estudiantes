<?php $secciones = $estudiantes->listarSecciones(); ?>

<div class="container">
  <h3 class="tittle">Editar Estudiante <?php echo $datos['nombre']; ?> </h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h5 class="panel-title">Editar Estudiante <?php echo $datos['nombre']; ?> </h5>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-3">
          <div class="panel panel-default">
            <div class="panel-body">
              <img class="img-responsive" src="<?php echo URL; ?>Views/template/imagenes/avatars/<?php echo $datos['imagen']; ?>" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="inputEmail" class="control-label">Nombre del Estudiante</label>
              <input class="form-control" type="text" name="nombre" value="<?php echo $datos['nombre']; ?>" required>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="control-label">Edad</label>
              <input class="form-control" type="number" name="edad" value="<?php echo $datos['edad']; ?>" required>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="control-label">Promedio</label>
              <input class="form-control" type="number" name="promedio" value="<?php echo $datos['promedio']; ?>" required>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="control-label">Seccion Actual: (<?php echo $datos['nombre_seccion']; ?>)</label>
              <select class="form-control" name="id_seccion">
                <?php while($row = mysqli_fetch_array($secciones)){ ?>
                  <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                <?php } ?>
              </select>
            </div>
            <input  type="hidden" name="id" value="<?php echo $datos['id']; ?>" required>
            <div class="form-group">
              <button type="submit" class="btn btn-success">Editar</button>
              <button type="reset" class="btn btn-warning">Borrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
