<?php 

require ('proveedorPHP/tag.php');
$contenido = "<h1>Codigo de Oro PHP</h1>" ;
$encabezado = new Tag("<header>","header",$contenido);

echo ($encabezado->construirPieza());

?>