<!DOCTYPE html>
<html lang="es">
<?php
const INICI = 0;
const FI = 50;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 220</title>
</head>
<body>
<ul>
    <?php
    for ($i = INICI + 1; $i <= FI; $i++) {
        if ($i % 2 == 0) {
            echo "<li>$i</li>";
        }
    }
    ?>
</ul>
</body>
</html>