<?php

  define('DS', DIRECTORY_SEPARATOR);
  define('ROOT', realpath(dirname(_FILE_)) . DS);
  define('URL', "http://localhost/pry-estudiantes/");

  require_once "Config/Autoload.php";
  Config\Autoload::run();
  require_once "Views/template.php";
  Config\Enrutador::run(new Config\Request());
?>
