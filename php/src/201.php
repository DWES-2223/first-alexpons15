<!DOCTYPE html>
<html lang="es">
<?php
$amplada = 10;
$altura = 5;

const FACTOR = 2;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Càlculs - Exercici 201</title>
</head>
<body>
    <p>
        <?php
        $area = $amplada * $altura * FACTOR;
        echo "àrea del rectangle és: " . $area;
        //echo "àrea del rectangle és: $area";
        ?>
    </p>
</body>
</html>