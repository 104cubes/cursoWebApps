<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Estructuras condicionales
    $edad = 18;
    
    if ($edad >= 18) {
        echo "Eres mayor de edad.";
    } else {
        echo "Eres menor de edad.";
    }
    
    // Bucles
    for ($i = 0; $i < 10; $i++) {
        echo "Número: " . $i . "<br>";
    }
    
    // Funciones
    function saludo($nombre) {
        echo "Hola, " . $nombre . "!";
    }
    
    saludo("Juan");
    
    // Arrays
    $colores = array("rojo", "verde", "azul");
    
    echo $colores[1] . "<br>";
    
    foreach ($colores as $color) {
        echo $color . "<br>";
    }
    ?>
<?php
// Imprimir los números del 1 al 10
$numero = 1;

while ($numero <= 10) {
    echo $numero . "<br>";
    $numero++;
}
?>
<?php
// Imprimir los números del 1 al 10
$numero = 1;

while ($numero <= 10) {
    echo $numero . "<br>";
    $numero++;
}
?>
<?php
// Funciones
function saludo($nombre) {
    echo "Hola, " . $nombre . "!";
}

saludo("Juan");




// Arrays
$colores = array("rojo", "verde", "azul");

echo $colores[1] . "<br>";

foreach ($colores as $color) {
    echo $color . "<br>";
}

$miArray = array("PHP", 18, ["pedro", "pablo"], miFuncion);

$cars[1] = "Ford";

$alumnos = array("pedro", "pablo", "pepe");

foreach ($colors as $x) {
  echo "$x <br>";
}
?>
</body>

</html>