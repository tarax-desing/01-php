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

var_dump(empty($usuario));
echo '<br>';

var_dump(isset($usuario4));
echo '<br>';
var_dump(isset($usuario['nivel']));
if (isset($usuario['nivel'])) {
    echo 'el usuario tiene el nivel' . $usuario['nivel'];

} else {
    echo 'el usuario no tiene nivel definido';
}

include "includes/footer.php";