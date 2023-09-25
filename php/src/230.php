<!DOCTYPE html>
<html lang="es">
<?php
$array = [];
for ($i = 0; $i < 50; $i++) {
    $num = rand(0, 99);
    //array_push($array, $num);
    $array[] = $num;
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 230</title>
</head>
<body>
<ul>
    <?php
    foreach ($array as $elem) {
        echo "<li>$elem</li>";
    }
    ?>
</ul>
</body>
</html>