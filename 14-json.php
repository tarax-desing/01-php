<?php

include "includes/header.php";

/*
formato ligero de intercambio de datos
se utiliza para transmitir datos entre un servidor y un cliente
una colección de datos que son pares de clave y valor
esa colección se muestra en la lista o array
JavaScript, react, angular, vue, android, java, c, kotlin.... entienden, tratan o manejan y consumen en formato json.


*/
///array asociativo en php
$productos = [
    [
        'nombre' => 'libro entrañable',
        'precio' => 42,
        'disponible' => true,
        'oferta' => true,
    ],
    [
        'nombre' => 'revista álbum',
        'precio' => 20,
        'disponible' => false,
        'oferta' => false,
    ],
];
$productos_json = json_encode($productos, JSON_UNESCAPED_UNICODE);
echo '<pre>';

var_dump($productos_json);


echo '</pre>';
/*//cuando hacemos una consulta a una base de datos , podemos obtenerlos en un  Array asociativo. Ese arreglo lo transformamos a json , para 
enviarlo al cliente.*/
$productos_array = json_decode($productos_json, true);
echo '<pre>';

var_dump($productos_array);


echo '</pre>';





include "includes/footer.php";