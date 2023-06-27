<?php
// Ejemplo de Clase y Objeto:
class Persona {
  public $nombre;
  public $edad;

  public function saludar() {
    echo "¡Hola, mi nombre es " . $this->nombre . " y tengo " . $this->edad . " años!";
  }
}

$persona = new Persona();
$persona->nombre = "Juan";
$persona->edad = 25;
$persona->saludar();

// Ejemplo de Atributos y Métodos:
class Circulo {
  public $radio;

  public function calcularArea() {
    return pi() * pow($this->radio, 2);
  }
}

$circulo = new Circulo();
$circulo->radio = 5;
$area = $circulo->calcularArea();
echo "El área del círculo es: " . $area;

// Ejemplo de Herencia:
class Animal {
  public $nombre;

  public function saludar() {
    echo "¡Hola, soy un animal llamado " . $this->nombre . "!";
  }
}

class Perro extends Animal {
  public function ladrar() {
    echo "¡Guau guau!";
  }
}

$perro = new Perro();
$perro->nombre = "Max";
$perro->saludar();
$perro->ladrar();
?>

