<?php
class MiClase {
    public $publico = "Este es un miembro público";
    private $privado = "Este es un miembro privado";
    protected $protegido = "Este es un miembro protegido";
  
    public function obtenerPrivado() {
      return $this->privado;
    }
  
    protected function obtenerProtegido() {
      return $this->protegido;
    }
  }
  
  $instancia = new MiClase();
  echo $instancia->publico;
  echo $instancia->obtenerPrivado();
  echo $instancia->obtenerProtegido();
  
?>

