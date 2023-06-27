<?php

abstract class Figura {
    protected $color;
  
    public function __construct($color) {
      $this->color = $color;
    }
  
    abstract public function calcularArea();
  }
  
  class Cuadrado extends Figura {
    private $lado;
  
    public function __construct($color, $lado) {
      parent::__construct($color);
      $this->lado = $lado;
    }
  
    public function calcularArea() {
      return $this->lado * $this->lado;
    }
  }
  
  $cuadrado = new Cuadrado("rojo", 5);
  echo "El área del cuadrado es: " . $cuadrado->calcularArea();
  
?>

