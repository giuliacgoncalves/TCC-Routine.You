<?php
  function autoload($classe) {
    // echo "Classe: $classe";
    if (file_exists("controllers/$classe.php")) {
      //echo "encontrou em controller";
      require_once("controllers/$classe.php");
      return;
    }
    if (file_exists("models/$classe.php")) {
      require_once("models/$classe.php");
      return;
    }
    if (file_exists("system/$classe.php")) {
      require_once("system/$classe.php");
      return;
    }
  }
  spl_autoload_register("autoload");
 ?>
