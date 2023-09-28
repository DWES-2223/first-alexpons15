<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 222</title>
</head>
<body>
<?php
if (isset($_GET["base"], $_GET["exponent"])) {
    $base = $_GET["base"];
    $exponent = $_GET["exponent"];
    $resultat = 1;
    for ($i = 0; $i < $exponent; $i++) {
        $resultat *= $base;
    }
    echo "$base^$exponent = $resultat";
} else {
    echo "Posa la base i l'exponent a les variables base i exponent pel QueryString";
}
?>
</body>
</html>