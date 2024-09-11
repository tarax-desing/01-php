<?php
include "includes/header.php";


for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $i . " - Fizz Buzz<br>";
    } elseif ($i % 3 == 0) {
        echo $i . " - Fizz<br>";
    } elseif ($i % 5 == 0) {
        echo $i . " - Buzz<br>";
    } else {
        echo "<br>";
    }
}

echo '<p>Claude</p>';
function fizzBuzz($start, $end)
{
    for ($i = $start; $i <= $end; $i++) {
        $salida = '';
        if ($i % 3 === 0)
            $salida .= 'FIZZ';
        if ($i % 5 === 0)
            $salida .= 'BUZZ';
        echo $salida === " $i : $salida";
        echo '<br>';
    }
}
include 'includes/footer.php';
