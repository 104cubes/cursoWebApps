<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Variables globales
$nombre = "Bard";
$apellido = "Modelo de lenguaje";
$edad = 2023 - 2022; // Edad actual
$ciudadNatal = "Google AI";
// Función para mostrar los datos personales
function mostrarDatos() {
    global $nombre, $apellido, $edad, $ciudadNatal;
    echo "Nombre: " . $nombre . "\n";
    echo "Apellido: " . $apellido . "\n";
    echo "Edad: " . $edad . " años\n";
    echo "Ciudad natal: " . $ciudadNatal . "\n";
}

// Mostrar los datos personales
mostrarDatos();
// Con variables en erl mismo 'scope'
    echo "<hr>Con variables locales\n";
    echo "Nombre: " . $nombre . "\n";
    echo "Apellido: " . $apellido . "\n";
    echo "Edad: " . $edad . " años\n";
    echo "Ciudad natal: " . $ciudadNatal . "\n";
?>

</body>
</html>