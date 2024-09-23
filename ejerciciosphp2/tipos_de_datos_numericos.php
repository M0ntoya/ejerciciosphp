<?php
$entero = 5; 
$flotante = 2.5; 

echo "Tipo de \$entero: " . gettype($entero) . "<br>";
echo "Tipo de \$flotante: " . gettype($flotante) . "<br>";

$suma = $entero + $flotante;
echo "La suma de \$entero y \$flotante es: $suma <br>";

echo "Multiplicación de \$entero por 10: " . ($entero * 10) . "<br>";
echo "Multiplicación de \$flotante por 10: " . ($flotante * 10) . "<br>";
?>
