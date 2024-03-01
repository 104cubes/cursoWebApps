<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área del triángulo en php</title>
</head>
<body>
    <?php
        $cateto1 = 9;
        $cateto2 = 15;

        function areaTriangulo($cateto1, $cateto2){
            $area = $cateto1*$cateto2/2;
            return $area;
            
        }

        function calculaHipotenusa($cateto1,$cateto2){
            return sqrt(pow($cateto1,2) + pow($cateto2,2));
        }

        echo " 
        <h2>El área del triángiulo es: 
        <b>" .areaTriangulo($cateto1, $cateto2)."</b></h2><hr>
        <h2> y la hipotenusa es: " .number_format(calculaHipotenusa($cateto1,$cateto2),2).
        "</h2>";
    ?>
</body>
</html>