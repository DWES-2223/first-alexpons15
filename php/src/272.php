<!DOCTYPE html>
<html lang="ca">
<?php
$records = include_once('atletes.php');
include_once('includes/funcionsActivitats.php');
?>
<head>
    <meta charset="UTF-8">
    <title>Activitat 272</title>
</head>
<body>
<?php
$dates = array_column_ext($records,'data',-1);
$clubs = array_column_ext($records,'club',-1);
$atletes = array_column_ext($records,'atleta',-1);
$ciutats = array_column_ext($records,'lloc',-1);
$natalicis = array_column_ext($records,'natalici',-1);
$recordMesVellKey = vell($dates);
$millorClub = laureado($clubs);
$millorAtleta = laureado($atletes);
$millorCiutat = laureado($ciutats);
$keyDiferenciaAtletaMesJove = jove($natalicis, $dates);
$nomAtletaMesJove = nomAtletaMesJove($atletes, $keyDiferenciaAtletaMesJove[0]);
$diferenciaAtletaMesJove = $keyDiferenciaAtletaMesJove[1];
?>
<p>Record més antic: <?= $recordMesVellKey ?></p>
<p>Club amb més títols: <?= $millorClub ?></p>
<p>Persona amb més records: <?= $millorAtleta ?></p>
<p>Ciutat més propicia: <?= $millorCiutat ?></p>
<p>Mes jove en aconsegir el record: <?= $nomAtletaMesJove ?> - <?= $diferenciaAtletaMesJove ?> anys</p>
<?php include_once('270a.php'); ?>
</body>
</html>