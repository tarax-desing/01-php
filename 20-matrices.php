<?php

include "includes/header.php";


$array1 = [0, 1, 2];
echo '<pre>';
var_dump($array1);
echo '</pre>';

for ($i = 0; $i < count($array1); $i++) {
    echo 'valor de i: ' . $i . 'contenido del array: ' . $array1[$i] . '<br>';
}

$array2 = [
    [0, 1, 2],
    [0, 1, 2],
    [0, 1, 2]

];



for ($i = 0; $i < count($array2); $i++) {
    for ($j = 0; $j < count($array2[$i]); $j++) {
        echo $i . '-' . $j . '/';


    }
}

echo '<br>';
echo '<br>';
$array3 = [
    ['primero 0', 'primero 1', 'primero 2'],
    ['segundo 0', 'segundo 1', 'segundo 2'],
    ['tercero 0', 'tercero 1', 'tercero 2']

];
for ($i = 0; $i < count($array3); $i++) {
    for ($j = 0; $j < count($array3[$i]); $j++) {
        echo $array3[$i][$j] . ' ';
    }
    echo '<br>';
}

echo "<table >";



?>
<table>
    <thead>
        <th>Primera</th>
        <th>Segunda</th>
        <th>Tercera</th>
    </thead>

    <body>
        <?php

        for ($i = 0; $i < count($array3); $i++) {
            echo '<tr>';
            for ($j = 0; $j < count($array3[$i]); $j++) {
                echo '<td>' . $array3[$j][$i] . '</td>';
            }
            echo '</tr>';
        }

        ?>
    </body>
</table>



<?php
include "includes/footer.php";