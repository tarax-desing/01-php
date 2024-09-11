<?php
include "includes/header.php";
$usuario = [
    'nombre' => 'pepa',
    'nivel 2' => 2,
    'permisos' => [
        'administrador' => true,
        'cliente' => false
    ]
];

$usuario['id'] = 23;

echo '<pre>';
var_dump($usuario);
echo '</pre>';

echo $usuario['permisos']['administrador'];

include "includes/footer.php";
