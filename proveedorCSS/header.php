<?php 
  $headerCss = 'padding:60px; 
                text-align:center; 
                background-color:var(--colorFondo); 
                color:var(--colorTexto); 
                font-size: 30px; 
                font-family:var(--estiloLetraFavorita)';
  
  $headerS = new Style('.header', $headerCss);

  echo ($headerS->agregarStyle());

?>