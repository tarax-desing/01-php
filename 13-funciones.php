<?php
declare(strict_types=1);

/*activa el modo de tipado estricto
sólo afecta al archivo donde se declara
debe ser la primera instrucción del archivo
realiza comprobaciones de tipos de parámetros y retorno de las funciones, es conveniente ponerlo. Justo al princio. La 1 línea.
*/
include "includes/header.php";
require "includes/header.php";
include_once "includes/header.php";

echo "<h2>Funciones</h2>";


/*  
tipos de datos:
int 
bool
string
float
array


*/
function sumar(int $n1, int $n2): void
{
    echo $n1 + $n2;
}

sumar(2, 7);
function restar(int $n1, int $n2): int
{
    return $n1 - $n2;
}

$resultado = restar(7, 4);
echo restar(8, 3);

include "includes/footer.php";


?>
<p>a otra cosa mariposa</p>