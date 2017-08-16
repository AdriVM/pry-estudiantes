<div class="container">
  <h3 class="titulo">Editar Secciones<hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h5 class="panel-tittle">Editar Sección <b> <?php echo $datos['nombre']; ?> </b></h5>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <form class="form-horizontal" action="" method="post">
            <div class="form-group">
              <label for="inputEmail" class="control-label">Nombre de la Sección</label>
              <input type="text" name="nombre" class="form-control" value="<?php echo $datos['nombre']; ?>" required>
            </div>
            <input type="hidden" name="id" class="form-control" value="<?php echo $datos['id']; ?>" required>
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
