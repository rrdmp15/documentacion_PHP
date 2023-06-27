<?php
// Ejemplo de función definida por el usuario:
function saludar($nombre) {
    echo "¡Hola, $nombre!";
}

saludar("Juan");

// Ejemplo de función en PHP:
echo strlen("Hola");

// Ejemplo de función que retorna un valor:
function sumar($num1, $num2) {
    return $num1 + $num2;
}

$resultado = sumar(3, 5);
echo "El resultado de la suma es: $resultado";

// Ejemplo de función que no retorna un valor:
function imprimirFecha() {
    echo date("d/m/Y");
}

echo "La fecha de hoy es: ";
imprimirFecha();
?>

