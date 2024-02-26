<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Definir los nombres de los participantes
$nombres = array(
    "Juan Pérez",
    "María García",
    "Pedro López",
    "Ana Martínez",
    "Sofía González",
    "Miguel Rodríguez",
    "Laura Fernández",
    "David García",
    "Elena Pérez",
    "Alberto López"
);
// Función para generar un array aleatorio
function generarArrayAleatorio($cantidad, $maximo) {
    $array = array();
    while (count($array) < $cantidad) {
        $numero = rand(0, $maximo - 1);
        if (!in_array($numero, $array)) {
            $array[] = $numero;
        }
    }
    return $array;
}
// Definir la cantidad de premios
$cantidadPremios = 3;

// Generar un array aleatorio con los índices de los ganadores
$indicesGanadores = generarArrayAleatorio($cantidadPremios, count($nombres));

// Mostrar los nombres de los ganadores
echo "**¡Felicidades a los ganadores!**\n";
foreach ($indicesGanadores as $indice) {
    echo "- " . $nombres[$indice] . "\n $cantidadPremios";
}

?>

</body>
</html>