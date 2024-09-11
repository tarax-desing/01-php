<?php

include "includes/header.php";
/*/crear un array con 8 n enteros
recorrerlo y mostrarlo
la longitud
buscar elemento
añadirle valores al array que sea menor a 120 y mostrarlo

*/

$numeros = [8, 6, 1, 3, 2, 4, 9, 7];
echo "array original:<br>";

foreach ($numeros as $numero) {
    echo $numero . " ";
}
sort($numeros);
echo "array ordenado<br>";
foreach ($numeros as $numero) {
    echo $numero . " ";
}


echo "<br>";


$longitud = count($numeros);
echo "La longitud del array es: " . $longitud;




echo "El tercer elemento del array es: " . $numeros[2];


echo "<br>";

echo '<pre>';
var_dump($numeros);
echo '</pre>';
$array_push = ($numeros < 110);


$numeros = [4, 7, 2, 9, 1, 5, 8, 3];

function generarNumeroMenor120()
{
    return rand(1, 110);
}


for ($i = 0; $i < 110; $i++) {
    $nuevoNumero = generarNumeroMenor120();
    $numeros[] = $nuevoNumero;
}

// Mostrar el array actualizado
echo "Array actualizado:\n";
foreach ($numeros as $numero) {
    echo $numero . " ";
}

// Mostrar la nueva longitud del array
echo "\n\nLa nueva longitud del array es: " . count($numeros);


// comprobar si un array esta vacia, si esta vacia rellenarla con algo. texto xej. Mostrarlo en pantalla en minuscula y en negrita

$variable;
if (empty($variable)) {
    echo "la lista está vacía";
} else
    echo "la variable está vacía";

echo empty($variable) ? 'la variable está vacía' : 'la variable tiene contenido';

if (empty($variable)) {
    $variable = "en un lugar de la mancha";
}
$variable = strtoupper($variable);
echo $variable;
echo "<br>";


//crear 4 variables. una tipo string, int array y bool. mostrar el tipo y valor de cada una.


$haceCalor = true;
$saludo = "hola mundo";
$bandera = ['roja', 'amarilla'];
$miNum = 9;

echo "variable boolena:" . var_export($haceCalor, true) . "(tipo: " . gettype($haceCalor) . ")<br>";
echo "variable string:$saludo (tipo: " . gettype($saludo) . ")<br>";
echo "Variable array: " . implode(", ", $bandera) . " (Tipo: " . gettype($bandera) . ")<br>";
echo "Variable número entero: $miNum(Tipo: " . gettype($miNum) . ")<br>";




/*////array de esta tabla. acción / aventura /deportes
                            gta      assasins fifa 19
                            cod      crash    pes 19
                            pugb     prince   moto gp 19
                            
*/



$categorias = array(
    "acción" => array("GTA", "FIFA 19", "COD"),
    "aventura" => array("Assasins", "Crash", "Prince"),
    "deportes" => array("FIFA 19", "Pes 19", "Moto GP 19")
);

echo "<table border='1'>";

foreach ($categorias as $categoria => $juegos) {
    echo "<th>$categoria</th>";
}
echo "</tr>";

foreach ($categorias as $categoria => $juegos) {
    foreach ($juegos as $juego) {
        echo "<td>$juego</td>";
    }
    echo "</tr>";
}
$max_juegos = array_map('count', $categorias);

echo "</tr>";

echo "</table>";

include "includes/footer.php";