<!DOCTYPE html>
<html lang="es">
<?php
$array = [];
for ($i = 0; $i < 33; $i++) {
    $num = rand(0, 100);
    //array_push($array, $num);
    $array[] = $num;
}
sort($array);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 231</title>
</head>
<body>
<ul>
    <li>El major: <?= $array[count($array) - 1]?></li>
    <li>El menor: <?= $array[0]?></li>
    <li>La mitjana: <?= intdiv(array_sum($array), count($array))?></li>
</ul>
</body>
</html>