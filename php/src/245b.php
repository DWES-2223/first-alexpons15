<?php
$titol = 'Exercici 245a';
include_once('245encapcalat.php');
?>
<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/includes/functions.php');
extract($_POST);
if (isset($noms, $preus)) {
    ?>
    <table>
        <thead>
        <tr>
            <th>Producte</th>
            <th>Preu €</th>
            <th>Preu Pts.</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $total = 0.0;
        for ($i = 0; $i < count($noms); $i++) {
            $total += $preus[$i];
            ?>
            <tr>
                <td><?= $noms[$i] ?></td>
                <td><?= $preus[$i] ?></td>
                <td><?= euro2pesetes($preus[$i]) ?></td>
            </tr>
            <?php
        }
        ?>
        <tr>
            <td>Total</td>
            <td><?= $total ?></td>
            <td><?= euro2pesetes($total) ?></td>
        </tr>
        </tbody>
    </table>
    <?php
} else {
    echo "<p>No s'han rebut els paràmetres de forma correcta</p>";
}
?>
<?php include_once('245peu.html'); ?>