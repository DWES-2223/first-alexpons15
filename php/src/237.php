<!DOCTYPE html>
<html lang="es">
<?php
$noms = $_POST['noms'];
$altures = $_POST['altures'];
$emails = $_POST['emails'];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 237</title>
</head>
<body>
<?php
if (isset($noms, $altures, $emails)) {
    ?>
    <table>
        <thead>
        <tr>
            <th>Nom</th>
            <th>Altura</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $posMesAlt = 0;
        $posMesBaix = 0;
        for($i = 0; $i < count($noms); $i++) {
            if ($altures[$i] > $altures[$posMesAlt]) {
                $posMesAlt = $i;
            }
            if ($altures[$i] < $altures[$posMesBaix]) {
                $posMesBaix = $i;
            }
            ?>
            <tr>
                <td><?= $noms[$i] ?></td>
                <td><?= $altures[$i] ?></td>
                <td><?= $emails[$i] ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <p>La persona més alta és <?= $noms[$posMesAlt] ?> i mesura <?= $altures[$posMesAlt] ?></p>
    <p>La persona més baixa és <?= $noms[$posMesBaix] ?> i mesura <?= $altures[$posMesBaix] ?></p>
    <?php
} else {
    echo "<p>No s'han rebut els paràmetres de forma correcta</p>";
}
?>
</body>
</html>