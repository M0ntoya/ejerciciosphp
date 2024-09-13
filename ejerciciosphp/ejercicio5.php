<?php
$n = rand(1, 100);

echo "Numero generado: $n<br>";

if ($n > 50) {
    echo "El numero es mayor que 50";
} elseif ($n < 50) {
    echo "El numero es menor que 50";
} else {
    echo "El numero es igual a 50";
}
?>
