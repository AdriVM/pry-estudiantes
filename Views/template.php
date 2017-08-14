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
    </head>
    <body>
<?php
    }

    public function __destruct(){
?>
    </body>
  </html>
<?php
    }
  }
?>
