<?php
// isset()
$nombre = "Juan";

if (isset($nombre)) {
    echo "La variable 'nombre' está definida y no es nula.";
} else {
    echo "La variable 'nombre' no está definida o es nula.";
}

// empty()
$edad = 30;

if (empty($edad)) {
    echo "La variable 'edad' está vacía o es cero.";
} else {
    echo "La variable 'edad' no está vacía y tiene un valor asignado.";
}

?>

