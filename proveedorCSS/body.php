<?php 
  require ('proveedorPHP/style.php');
  $estilosDelBody = "background-color: var(--colorFavorito);";
  $body = new Style('body', $estilosDelBody);

  $string = $body->agregarStyle();
  echo($string);

?>