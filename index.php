<?php
// Array
$frutas = array("Manzana", "Banana", "Naranja");
echo "array de frutas: ";
print_r($frutas);

// Acceder a un elemento del array
echo "Elemento 0: " . $frutas[0];

// array asociativo
$edades = array("Juan" => 25, "María" => 30, "Pedro" => 35);
echo "array asociativo de edades: ";
print_r($edades);

// Acceder a un elemento del array asociativo
echo "Edad de María: " . $edades["María"];

// Funciones para arrays
$numeros = array(1, 2, 3, 4, 5);

// Contar elementos en el array
$conteo = count($numeros);
echo "Número de elementos: " . $conteo;

// Ordenar el array
sort($numeros);
echo "array ordenado: ";
print_r($numeros);

// Verificar si un elemento existe en el array
$existe = in_array(3, $numeros);
echo "¿El número 3 existe en el array? " . ($existe ? "Sí" : "No");

// Obtener las claves de un array asociativo
$claves = array_keys($edades);
echo "Claves del array asociativo de edades: ";
print_r($claves);

// Obtener los valores de un array asociativo
$valores = array_values($edades);
echo "Valores del array asociativo de edades: ";
print_r($valores);
?>

