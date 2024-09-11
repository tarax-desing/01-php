<?php
include "includes/header.php";



for ($i = 0; $i < 10; $i++):

    echo $i . '<br>';
endfor;
echo '<br>';
$i = 0;
while ($i < 10):
    echo $i;
    $i++;
endwhile;
$i = 0;
do {
    echo $i;
    $i++;
} while ($i < 10);






include 'includes/footer.php';
