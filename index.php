<?php

  define('DS', DIRECTORY_SEPARATOR);
  define('ROOT', realpath(dirname(_FILE_)) . DS);

  require_once "Config/Autoload.php";
  Config\Autoload::run();
  Config\Enrutador::run(new Config\Request());
?>
