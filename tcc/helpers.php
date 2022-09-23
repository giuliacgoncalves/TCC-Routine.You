<?php
  function setMyCookie($name, $value) {
    $header = "Set-Cookie: $name=$value";
    header($header);
  }
 ?>
