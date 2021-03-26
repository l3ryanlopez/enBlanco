<?php 

class Style{
  private $className;
  private $style;

  public function __construct($class, $style)
  {
    $this->className = $class;
    $this->style = $style;
  }

  // SETTERS
  public function establecerClase($clase)
  {
    $this->className = $clase;
  }
  public function establecerEstilo($estilo)
  {
    $this->style = $estilo;
  }

  // GETTERS
  public function obtenerClase()
  {
    return $this->className;
  }
  public function obtenerEstilo()
  {
    return $this->style;
  }

  // FUNCIONES
  public function agregarStyle()
  {
    $nombre = $this->obtenerClase();
    $estilo = $this->obtenerEstilo();

    return $nombre . '{' . $estilo . '}';
  }

  public function agregarQuery($query)
  {
    return $query;
  }
}
