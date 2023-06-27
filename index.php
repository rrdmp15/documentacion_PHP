<?php
    // Estructura de control condicional "if":
    $edad = 25;
    
    if ($edad >= 18) {
        echo "Eres mayor de edad.";
    } else {
        echo "Eres menor de edad.";
    }
    // Estructura de control condicional "switch":
    $diaSemana = "Martes";
    
    switch ($diaSemana) {
        case "Lunes":
            echo "Hoy es lunes.";
            break;
        case "Martes":
            echo "Hoy es martes.";
            break;
        case "Miércoles":
            echo "Hoy es miércoles.";
            break;
        default:
            echo "Hoy no es lunes, martes ni miércoles.";
            break;
    }
    // Estructura de control de repetición "for":
    for ($i = 1; $i <= 5; $i++) {
        echo "El valor de i es: " . $i . "<br>";
    }
    // Estructura de control de repetición "while":
    $num = 1;
    
    while ($num <= 10) {
        echo $num . " ";
        $num++;
    }
    // Estructura de control de repetición "do-while":
    $num = 1;
    
    do {
        echo $num . " ";
        $num++;
    } while ($num <= 10);
?>

