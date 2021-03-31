<?php 

require ('proveedorPHP/tag.php');
require ('proveedorHTML/flip-card.php');
$contenido = "<h1>Codigo de Oro PHP</h1>".$flipCardT->construirPieza();
$encabezado = new Tag("<header>","header",$contenido);

echo ($encabezado->construirPieza());

?>