<?php
$correo = "test_user@example.com";

echo "El correo proporcionado es: $correo<br>";

$regex = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

if (preg_match($regex, $correo)) {
    echo "El correo es válido.<br>";
} else {
    echo "El correo no es válido.<br>";
}

$posicion_arroba = strpos($correo, '@');
$usuario = substr($correo, 0, $posicion_arroba);
echo "El nombre de usuario es: $usuario<br>";
?>
