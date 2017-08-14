<?php namespace Views;

  $template = new Template();

  class Template{
    public function __construct(){
?>
  <!DOCTYPE html>
  <html lang="es">
    <head>
      <meta charset="utf-8">
      <title>CRUD Estudiantes | Cristian Villota</title>
      <link rel="stylesheet" href="<?php echo URL; ?>/Views/template/css/bootstrap.css">
      <link rel="stylesheet" href="<?php echo URL; ?>/Views/template/css/general.css">
    </head>
    <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
		        <span class="sr-only"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
          <a class="navbar-brand" href="<?php echo URL; ?>">Administración de Estudiantes</a>
          </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		      <ul class="nav navbar-nav">
		        <li><a href="<?php echo URL; ?>">Inicio</a></li>
		        <li class="dropdown">
		          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Estudiantes <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="<?php echo URL; ?>estudiantes">Listado</a></li>
		            <li><a href="<?php echo URL; ?>estudiantes/agregar">Agregar</a></li>
		          </ul>
		        </li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Secciones <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="<?php echo URL; ?>secciones">Listado</a></li>
		            <li><a href="<?php echo URL; ?>secciones/agregar">Agregar</a></li>
		          </ul>
		        </li>
		      </ul>

		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Cristian Villota</a></li>
		      </ul>
		    </div>
        </div>
      </nav>
<?php
    }

    public function __destruct(){
?>
      <footer class="navbar-fixed-botton">
        Todos los derechos reservados &copy 2017 <br>
        Cristian Villota - @cristian_vj
      </footer>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="<?php echo URL; ?>Views/template/js/bootstrap.js"></script>
    </body>
  </html>
<?php
    }
  }
?>
