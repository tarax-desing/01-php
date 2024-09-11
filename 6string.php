<?php
include "includes/header.php";
$texto = 'el batracio amarillo';
$longitud = strlen($texto);

echo "<p>El texto: $texto tiene $longitud longitud</p>";
///eliminar espacios al principio y al final de un string
$texto = trim($texto);
//may y minuscula
echo strtoupper($texto);
echo strtolower($texto);
echo str_replace("amarillo ", "rojo", $texto);

echo $texto;


///comprobar su un strim esta dentro de otro
echo strpos($texto, 'rojo');
include 'includes/footer.php';