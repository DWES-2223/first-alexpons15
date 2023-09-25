<!DOCTYPE html>
<html lang="es">
<?php
const TIPUS_1 = 'M';
const TIPUS_2 = 'F';
$array = [];
for ($i = 0; $i < 100; $i++) {
    $element = rand(0,1)?TIPUS_1:TIPUS_2;
    $array[$i] = $element;
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 232</title>
</head>
<body>
<?php
$agregats = array_count_values($array);
foreach ($agregats as $sexe => $numero) {
    echo "<p>$sexe: $numero</p>";
}
?>
</body>
</html>