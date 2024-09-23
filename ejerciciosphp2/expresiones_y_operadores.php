<?php
$num1 = 12;
$num2 = 5;

echo "Suma: " . ($num1 + $num2) . "<br>";
echo "Resta: " . ($num1 - $num2) . "<br>";
echo "Multiplicación: " . ($num1 * $num2) . "<br>";
echo "División: " . ($num1 / $num2) . "<br>";
echo "Módulo: " . ($num1 % $num2) . "<br>";

echo "¿\$num1 > \$num2?: " . ($num1 > $num2 ? 'true' : 'false') . "<br>";
echo "¿\$num1 < \$num2?: " . ($num1 < $num2 ? 'true' : 'false') . "<br>";
echo "¿\$num1 >= \$num2?: " . ($num1 >= $num2 ? 'true' : 'false') . "<br>";
echo "¿\$num1 <= \$num2?: " . ($num1 <= $num2 ? 'true' : 'false') . "<br>";
echo "¿\$num1 == \$num2?: " . ($num1 == $num2 ? 'true' : 'false') . "<br>";
echo "¿\$num1 != \$num2?: " . ($num1 != $num2 ? 'true' : 'false') . "<br>";

echo "¿\$num1 es mayor que 10 y \$num2 es menor que 10?: " . (($num1 > 10 && $num2 < 10) ? 'true' : 'false') . "<br>";
echo "¿\$num1 es mayor que 10 o \$num2 es menor que 10?: " . (($num1 > 10 || $num2 < 10) ? 'true' : 'false') . "<br>";
echo "¿No es verdad que \$num1 es menor que 10?: " . (!( $num1 < 10 ) ? 'true' : 'false') . "<br>";
?>
