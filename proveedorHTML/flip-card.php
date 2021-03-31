<?php 
  $content = '
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="proveedorMultimedia/1.jpg" width="100%" height="100%"> 
      </div>
      <div class="flip-card-back">
        <img src="proveedorMultimedia/2.jpg" width="100%" height="100%"> 
      </div>
    </div>
    ';

    $flipCardT = new Tag('<div>', 'flip-card', $content);
?>