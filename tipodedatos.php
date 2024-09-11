<?php
include "includes/header.php";
echo 'hola mundo';
//boolean
$isAutorized = false;
echo '<p>' . $isAutorized . '</p>';
var_dump($isAutorized);
//enteros
$numero = 200;
echo "<p>El NÚMERO ES:$numero y es un número entero </p>";




///float
$float = 30.6;
var_dump($float);
echo "<br>";
///string
$nombre = 'Ama';
///array
$array = [1, 2, 3,];
$array2 = array('fresa,');
var_dump($array);

include "includes/footer.php";