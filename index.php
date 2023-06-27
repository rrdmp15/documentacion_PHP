<?php

interface Animal {
    public function hacerSonido();
  }
  
  class Perro implements Animal {
    public function hacerSonido() {
      echo "Woof!";
    }
  }
  
  class Gato implements Animal {
    public function hacerSonido() {
      echo "Meow!";
    }
  }
  
  $perro = new Perro();
  $gato = new Gato();
  
  $perro->hacerSonido(); 
  $gato->hacerSonido(); 
  
?>

