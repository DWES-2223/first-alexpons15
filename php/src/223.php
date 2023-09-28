<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 223</title>
</head>
<body>
<?php
if (isset($_GET["nombre"])) {
    ?>
    <table>
        <thead>
        <tr>
            <th>a</th>
            <th>*</th>
            <th>b</th>
            <th>=</th>
            <th>a*b</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $nombre = $_GET["nombre"];
        for ($i = 1; $i <= 10; $i++) {
            ?>
            <tr>
                <td><?= $nombre ?></td>
                <td>*</td>
                <td><?= $i ?></td>
                <td>=</td>
                <td><?= ($nombre * $i) ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <?php
} else {
    echo "Posa el nombre pel QueryString";
}
?>
</body>
</html>