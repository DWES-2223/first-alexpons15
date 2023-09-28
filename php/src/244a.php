<!DOCTYPE html>
<html lang="ca">
<?php
extract($_GET);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 244a</title>
</head>
<body>
<?php
if (isset($quantitat) && is_numeric($quantitat) && $quantitat > 0) { ?>
    <form method="post" action="244b.php">
        <?php
        for ($i = 1; $i <= $quantitat; $i++) { ?>
            <label for="nom<?= $i ?>">Nom <?= $i ?>:</label><br>
            <input type="text" id="nom<?= $i ?>" name="noms[]"><br>
            <label for="preu<?= $i ?>">Preu <?= $i ?>:</label><br>
            <input type="number" id="preu<?= $i ?>" name="preus[]"><br>
            <?php
        }
        ?>
        <input type="submit" id="submit" value="Enviar">
    </form>
    <?php
} else {
    echo '<p>Dades incorrectes</p>';
}
?>
</body>
</html>