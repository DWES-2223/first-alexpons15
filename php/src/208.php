<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 208</title>
</head>
<body>
<?php
if (isset($_GET["edat"])) {
    $edat = $_GET["edat"];
    if ($edat < 3) {
        $resultat = "bebé";
    } elseif ($edat < 13) {
        $resultat = "xiquet";
    } elseif ($edat < 18) {
        $resultat = "adolescent";
    } elseif ($edat < 67) {
        $resultat = "adult";
    } else {
        $resultat = "jubilat";
    }
    echo "ets un $resultat";
} else {
    echo '<p>Posa la teu edat actual a la variable edat pel QueryString</p>';
}
?>
</body>
</html>