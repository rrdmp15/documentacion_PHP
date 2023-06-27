<?php
// operadores aritmeticos

$a = 10;
$b = 5;

$suma = $a + $b;
$resta = $a - $b;
$multiplicacion = $a * $b;
$division = $a / $b;
$modulo = $a % $b;

// operadores de asignacion

$a = 10;
$b = 5;

$a += $b; 
$a -= $b; 
$a *= $b;
$a /= $b; 
$a %= $b;

// operadores de arrays

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];

$concatenacion = $array1 + $array2; 

// operadores de comparacion

$a = 10;
$b = 5;

$igual = ($a == $b); 
$diferente = ($a != $b); 
$mayor = ($a > $b); 
$menor = ($a < $b); 
$mayorOigual = ($a >= $b); 
$menorOigual = ($a <= $b); 

// operadores logicos

$a = true;
$b = false;

$and = ($a && $b); 
$or = ($a || $b); 
$not = !$a; 

// operadores bitwise

$a = 5;
$b = 3;

$andBitwise = $a & $b;
$orBitwise = $a | $b;
$xorBitwise = $a ^ $b;
$desplazamientoIzquierda = $a << $b; 
$desplazamientoDerecha = $a >> $b;


// operador de ejecucion

$resultado = `ls -la`; 

// operador de control de errores

$resultado = @file_get_contents("archivo.txt");

// operador de incremento y decremento

$a = 5;

$incremento = ++$a; 
$decremento = --$a; 

?>
