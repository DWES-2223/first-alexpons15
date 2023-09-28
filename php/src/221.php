<!DOCTYPE html>
<html lang="es">
<?php
const INICI = 1;
const FI = 10;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 221</title>
</head>
<body>
<?php
$total = 0;
for ($i = INICI; $i <= FI; $i++) {
    $total += $i;
    if ($i < FI) {
        echo "$i+";
    } else {
        echo "$i=";
    }
}
echo "$total";
?>
</body>
</html>