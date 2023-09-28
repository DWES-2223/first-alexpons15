<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 207</title>
</head>
<body>
<?php
if (isset($_GET["numero1"]) && isset($_GET["numero2"]) && isset($_GET["numero3"])) {
    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];
    $numero3 = $_GET["numero3"];
    $major = max($numero1, $numero2, $numero3);
    echo "El nombre més gran entre $numero1, $numero2 i $numero3 és el $major";
} else {
    echo '<p>Posa els números a comprobar a les variables numero1,numero2 i numero3 pel QueryString</p>';
}
?>
</body>
</html>