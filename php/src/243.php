<!DOCTYPE html>
<html lang="es">
<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/includes/functions.php');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 243</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['reset'])) {
    $pesetes = $_POST['pesetes'];
    $euros = $_POST['euros'];
    if ($pesetes > 0) {
        $euros = peseta2euros($pesetes);
    } else if ($euros > 0) {
        $pesetes = euro2pesetes($euros);
    } else {
        echo "<p>No has introduït valors adequats</p>";
    }
} else {
    $pesetes = 0;
    $euros = 0;
}
?>
<h1>Conversor de monedes</h1>
<form method="post" action="243.php">
    <label for="pesetes">Quantitat en pesetes</label>
    <input id="pesetes" name="pesetes" placeholder="Escriu la quantitat de pesetes" type="text" value="<?= $pesetes ?>"><br>
    <label for="euros">Quantitat en euros</label>
    <input id="euros" name="euros" placeholder="Escriu la quantitat de euros" type="text" value="<?= $euros ?>"><br>
    <input type="submit" id="submit" value="Enviar">
    <input type="submit" name="reset" value="Restablir">
</form>
</body>
</html>