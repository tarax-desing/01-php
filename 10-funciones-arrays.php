<?php
include "includes/header.php";




$frutas = ['fresas', 'piña', 'pera'];
$existe = in_array('pera', $frutas);


if ($existe):
    echo '<p>el elemento existe</p>';
elseif ($existe):
    echo '<p>el elemento no existe</p>';
endif;

sort($frutas);

echo '<pre>';
var_dump($frutas);
echo '</pre>';

rsort($frutas);
echo '<pre>';
var_dump($frutas);
echo '</pre>';

$usuario = [
    'nombre' => 'pepa',
    'nivel1' => 'inicial',
    'permisos' => [
        'administrador' => true,
        'cliente' => false
    ]
];

asort($usuario);

echo '<pre>';
var_dump($usuario);
echo '</pre>';



ksort($usuario);

echo '<pre>';
var_dump($usuario);
echo '</pre>';




include 'includes/footer.php';
