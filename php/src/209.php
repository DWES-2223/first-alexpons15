<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 209</title>
</head>
<body>
<?php
if (isset($_GET["hora"]) && isset($_GET["minut"]) && isset($_GET["segon"])) {
    $hora = $_GET["hora"];
    $minut = $_GET["minut"];
    $segon = $_GET["segon"];
    $segon++;
    if ($segon >= 60) {
        $segon = 0;
        $minut++;
        if ($minut >= 60) {
            $minut = 0;
            $hora++;
            if ($hora >= 24) {
                $hora = 0;
            }
        }
    }
    echo "$hora:$minut:$segon";
} else {
    echo '<p>Posa les variables hora, minut i segon pel QueryString</p>';
}
?>
</body>
</html>