<?php

include "includes/header.php";

echo "<h2>Aquí recibo formulario";


if (isset($_GET["nombre"])) {
    $nombre = trim($_GET["nombre"]);
    echo "hola:" . $nombre;
}
if (isset($_GET["apellidos"])) {
    echo "" . $_GET["apellidos"];
}



include "includes/footer.php";