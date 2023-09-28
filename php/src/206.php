<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 206</title>
</head>
<body>
<?php
if (isset($_GET["numero"])) {
    $numero = $_GET["numero"];
    if ($numero > 0) {
        echo "El número " . $numero . " és positiu";
    } else if ($numero < 0) {
        echo "El número " . $numero . " és negatiu";
    } else {
        echo "El número " . $numero . " és zero";
    }
} else {
    echo "<p>Posa el numero a comprobar a la variable numero del QueryString</p>";
}
?>
</body>
</html>