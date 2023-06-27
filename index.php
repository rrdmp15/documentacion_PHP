<?php

spl_autoload_register(function ($className) {
    $filePath = __DIR__ . '/' . $className . '.php';
    if (file_exists($filePath)) {
        require_once $filePath;
    }
});

$objeto = new MiClase();
$objeto->metodo();
  
?>

