<?php

class Tag
{
  private $tag;
  private $className;
  private $content;

  public function __construct($tag, $className, $content)
  {
    $this->tag = $tag;
    $this->className = $className;
    $this->content = $content;
  }

  // SETTER
  public function establecerTag($tag)
  {
    $this->tag = $tag;
  }
  public function establecerClassName($className)
  {
    $this->className = $className;
  }
  public function establecerContent($content)
  {
    $this->content = $content;
  }

  // GETTER
  public function obtenerTag()
  {
    return $this->tag;
  }
  public function obtenerClassName()
  {
    return $this->className;
  }
  public function obtenerContent()
  {
    return $this->content;
  }

  // CONSTRUIR PIEZA
  public function construirPieza(){
    $tag = $this->obtenerTag;
    $cName = $this->obtenerClassName;
    $contenido = $this->obtenerContent;

    switch ($tag) {
      case "<div>":
        return '<div class="'.$cName.'">'.$contenido.'</div>';
        break;
      case "<header>":
        return '<header class="'.$cName.'">'.$contenido.'</header>';
        break;
      case "<nav>":
        return '<nav class="'.$cName.'">'.$contenido.'</nav>';
        break;
      case "<ul>":
        return '<ul class="'.$cName.'">'.$contenido.'</ul>';
        break;
      case "<section>":
        return '<section class="'.$cName.'">'.$contenido.'</section>';
        break;
      case "<article>":
        return '<article class="'.$cName.'">'.$contenido.'</article>';
        break;
      case "<aside>":
        return '<aside class="'.$cName.'">'.$contenido.'</aside>';
        break;
      case "<footer>":
        return '<footer class="'.$cName.'">'.$contenido.'</footer>';
        break;
      case "<main>":
        return '<main class="'.$cName.'">'.$contenido.'</main>';
        break;
      
      default:
        echo ("Tag no soportado");
        break;
    }
  }
}
