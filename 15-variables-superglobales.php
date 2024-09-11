<?php

include "includes/header.php";
/*
son arrays asociativos predefinidos, disponibles en todo el script en php
no necesitan ser declaradas porque ya esxisten.
suelen empezar con dolar, guión bajo mayúscula
$_GET      CONTIENE VARIABLES PASADAS AL SCEIPT A TRAVÉS DE PARÁMETROS EN LA URL. SE VE AHÍ.
$_POST     CONTIENE VALORES OCULTOS , QUE NO SE VEN EN LA URL. A TRAVÉS DE HTTP POST
$_REQUEST  CONTIENE VALORES DEL $_GET, DEL $_POST Y DEL $_COOKIE
$_COOKIES  CONTIENE VALORES PASADOS A TRAVÉS DE HTTP COOKIE
$_SESSION  CONTIENE VARIABLES DISPONIBLES PARA EL SCRIPT ACTUAL
$_SERVER   CONTIENE INFO SOBRE EL ENTORNO DEL SERVIDOR Y LA CONSTRUCCIÓN DEL SCRIPT

$_env valores de entorno. Debe estar activado en el servidor

MOSTRAR LA IP DEL USUARIO
*/

$path = $_ENV['PARH'];
// if (isset($_ENV)){
//     echo

//     // 'Path:'$path '<br>';
// }else{
//     echo'la variable no está disponible<br>';
// }
$user_ip = $_SERVER['REMOTE_ADDR'];
echo "tu ip es:' . $user_ip <br>";
$nombreServidor = $_SERVER['SERVER_NAME'];
echo "nombre del servidor: $nombreServidor";

echo '<ul>';

// foreach($_SERVER as $key => $value) {
// echo '<li>';


// '</ul>'}  


include "includes/footer.php";
