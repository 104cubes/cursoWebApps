<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "ejercicios variables" ?></title>
</head>
<body>
    <?php 
        $nombre="Pablo";
        $apellido="Picapiedra";
        $edad = 36;
        echo "<H1>Hola " .$nombre. " " .$apellido."
        </h1>
        <h2>Tu edad: $edad<h2>";
    ?>
<?php 
   
function escribe(){
    global $nombre, $apellido, $edad;
    echo "<h1>Hola $nombre $apellido</h1>
    <h2>Tu edad: $edad<h2>";
}
escribe();
    ?>
<div>

</div>
</body>
</html>


