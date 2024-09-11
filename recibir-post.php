<?php

include "includes/header.php";

echo "<h2>Aquí recibo formulario</h2>";


if (isset($_POST["nombre"])) {
    $nombre = trim($_POST["nombre"]);
    echo "hola:" . $nombre;
}
if (isset($_POST["apellidos"])) {
    echo "" . $_POST["apellidos"];
}



include "includes/footer.php";