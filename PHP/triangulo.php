<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Función para calcular el área de un triángulo
    function areaTriangulo($base, $altura)
    {
        return ($base * $altura) / 2;
    }
    function hipotenusa($catetoA, $catetoB)
    {
        return sqrt(pow($catetoA, 2) + pow($catetoB, 2));
    }
    // Leer la base y la altura del triángulo
    $base = 50;
    $altura = 25;

    // Calcular el área del triángulo
    $area = areaTriangulo($base, $altura);
    $hipotenusa = hipotenusa($base, $altura);

    // Mostrar los resultados
    echo "El área del triángulo es: " . $area . " unidades cuadradas" . PHP_EOL;
    echo "La hipotenusa del triángulo es: " . $hipotenusa . " unidades" . PHP_EOL;
    ?>

</body>

</html>