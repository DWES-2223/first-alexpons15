<!DOCTYPE html>
<html lang="ca">
<?php
$records = include_once('atletes.php');
?>
<head>
    <meta charset="UTF-8">
    <title>Activitat 271 - Modificació d'un rècord</title>
</head>
<body>
<h1>Modificació d'un rècord</h1>
<?php include_once('formRecord.html'); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prova = $_POST['prova'];
    $marca = $_POST['marca'];
    $atleta = $_POST['atleta'];
    $natalici = $_POST['natalici'];
    $club = $_POST['club'];
    $data = $_POST['data'];
    $lloc = $_POST['lloc'];
    if(array_key_exists($prova, $records)) {
        $someFieldHasBeenModified = false;
        if(!empty($marca)) {
            $records[$prova]['marca'] = $marca;
            $someFieldHasBeenModified = true;
        }
        if(!empty($atleta)) {
            $records[$prova]['atleta'] = $atleta;
            $someFieldHasBeenModified = true;
        }
        if(!empty($natalici)) {
            $records[$prova]['natalici'] = $natalici;
            $someFieldHasBeenModified = true;
        }
        if(!empty($club)) {
            $records[$prova]['club'] = $club;
            $someFieldHasBeenModified = true;
        }
        if(!empty($data)) {
            $records[$prova]['data'] = $data;
            $someFieldHasBeenModified = true;
        }
        if(!empty($lloc)) {
            $records[$prova]['lloc'] = $lloc;
            $someFieldHasBeenModified = true;
        }
        if ($someFieldHasBeenModified) { ?>
            <p>La prova <?= $prova ?> ha sigut modificada satisfactòriament.</p>
            <?php
        } else { ?>
            <p>La prova <?= $prova ?> no ha modificat cap camp.</p>
        <?php
        }
        include_once('270a.php');
    } else { ?>
        <p>La prova <?= $prova ?> no existeix en la llista de records oficials de la FEA.</p>
        <?php
    }
}
?>
</body>
</html>