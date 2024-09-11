<?php
include "includes/header.php";


$vehículos = ['coche', 'avión', 'barco', 'moto'];

echo count($vehículos) . '<br>';

echo sizeof($vehículos) . '<br>';

for ($i = 0; $i < count($vehículos); $i++) {
    // echo $vehÃ©culos[$i] . '<br>';
}
foreach ($vehículos as $vehículos) {
    echo $vehículos . '<br>';
}


$usuario = [
    'nombre' => 'Pepa',
    'nivel' => 2,
    'permisos' => 'Administrador',
];

foreach ($usuario as $valor) {
    echo $valor . '<br>';
}
foreach ($usuario as $key => $valor) {
    echo $key . ':' . $valor . '<br>';
}


$productos = [
    [
        'nombre' => 'libro',
        'precio' => 42,
        'disponible' => true,
        'oferta' => true,
    ],
    [
        'nombre' => 'revista',
        'precio' => 20,
        'disponible' => false,
        'oferta' => false,
    ],
];
echo '<div class="articulo">';
foreach ($productos as $producto) {
    ?>
    <article>
        <p>productos: <?php echo $producto['nombre']; ?></p>
        <p>precio</p> <?php echo $producto['precio'] . '€'; ?></p>
        <p><?php echo $producto['disponible'] ? 'Disponible' : 'no disponible' ?></p>
        <?php echo $producto['oferta'] ? '<p class= "rebajado">Rebajado</p>' : ""; ?>
    </article>
    <?php

}
echo '</div>';
include 'includes/footer.php';
