<?php
$titol = 'Exercici 245a';
include_once('245encapcalat.php');
?>
<?php
extract($_GET);
if (isset($quantitat) && is_numeric($quantitat) && $quantitat > 0) { ?>
    <form method="post" action="245b.php">
        <?php
        for ($i = 1; $i <= $quantitat; $i++) { ?>
            <label for="nom<?= $i ?>">Nom <?= $i ?>:</label><br>
            <input type="text" id="nom<?= $i ?>" name="noms[]"><br>
            <label for="preu<?= $i ?>">Preu <?= $i ?>:</label><br>
            <input type="text" id="preu<?= $i ?>" name="preus[]"><br>
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
<?php include_once('245peu.html'); ?>