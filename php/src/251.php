<!DOCTYPE html>
<html lang="ca">
<?php
include_once('./includes/funcionsCadenes.php');
?>
<head>
    <meta charset="UTF-8">
    <title>Exercici 251</title>
</head>
<body>
<p>Frase: <?= $frase = 'Hola Amiga' ?></p>
<?php
$vocals = vocals($frase);
$totalVocals = array_sum($vocals);
foreach ($vocals as $vocal => $repeticions) { ?>
    <p>Hi ha <?= $repeticions ?> vegades la <?= $vocal ?></p>
    <?php
}
?>
<p>A la frase hi ha <?= $totalVocals ?> vocals</p>
</body>
</html>