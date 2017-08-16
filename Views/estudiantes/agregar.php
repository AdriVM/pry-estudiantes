<div class="container">
  <h3 class="titulo">Agregar Estudiantes<hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h5 class="panel-tittle">Agregar Nuevo Estudiante</h5>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="inputEmail" class="control-label">Nombre del Estudiante</label>
              <input type="text" name="nombre" value="" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="control-label">Edad</label>
              <input type="number" name="edad" value="" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="control-label">Promedio</label>
              <input type="number" name="promedio" value="" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="control-label">Seccion</label>
              <select name="id_seccion" class="form-control" name="">
                <?php while($row = mysqli_fetch_array($datos)){ ?>
                  <option value="<?php echo $row['id']; ?>"> <?php echo $row['nombre'] ?> </option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="control-label">Imagen</label>
              <input type="file" name="imagen" value="" class="form-control" id="imagen">
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
