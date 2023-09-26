<!DOCTYPE html>
<html lang="es">
<?php
$quantitat = $_POST['quantitat'];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 236</title>
</head>
<body>
<?php
if (isset($quantitat) && $quantitat > 0) { ?>
    <h2>Formularis per a <?= $quantitat ?> persones</h2>
    <form method="post" action="237.php">
        <?php
        for ($i = 1; $i <= $quantitat; $i++) { ?>
            <label for="nom<?= $i ?>">Nom:</label><br>
            <input type="text" id="nom<?= $i ?>" name="noms[]"><br>
            <label for="altura<?= $i ?>">Alçada:</label><br>
            <input type="text" id="altura<?= $i ?>" name="altures[]"><br>
            <label for="email<?= $i ?>">Email:</label><br>
            <input type="text" id="email<?= $i ?>" name="emails[]"><br>
            <br>
            <?php
        }
        ?>
        <input type="submit" value="Enviar">
    </form>
    <?php
} else {
    echo '<p>Introdueix una quantitat vàlida de persones per a generar el formulari</p>';
}
?>
</body>
</html>