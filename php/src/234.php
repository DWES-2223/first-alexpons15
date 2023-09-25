<!DOCTYPE html>
<html lang="es">
<?php
$altures = ['Javier' => 170,
    'Alejandro' => 183,
    'Sergi' => 180,
    'Maria' => 168,
    'Nuria' => 169]
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 234</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Nom</th>
        <th>Alçada</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($altures as $nom => $altura) { ?>
        <tr>
            <td><?= $nom ?></td>
            <td><?= $altura ?></td>
        </tr>
        <?php
    }
    ?>
        <tr>
            <td>Alçada mitjana</td>
            <td><?= array_sum($altures)/count($altures) ?></td>
        </tr>
    </tbody>
</table>
</body>
</html>