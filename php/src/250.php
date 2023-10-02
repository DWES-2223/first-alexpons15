<!DOCTYPE html>
<html lang="ca">
<?php
include_once('./includes/funcionsCadenes.php');
?>
<head>
    <meta charset="UTF-8">
    <title>Exercici 250</title>
</head>
<body>
<p>Frase original: <?= $frase = 'Hola Amiga' ?></p>
<p>Frase amb caràcters imparells: <?= caractersImparells($frase) ?></p>
</body>
</html>