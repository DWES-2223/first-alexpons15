<!DOCTYPE html>
<html lang="es">
<?php
/*
204.php: anys - Després de llegir l'edat d'una persona, mostrar l'edat que tindrà dins de 10 anys i fa 10 anys.
A més, mostra quin any serà en cadascun dels casos. Finalment, mostra l'any de jubilació suposant que treballaràs
fins als 67 anys. En aquest cas, no fa falta que prèviament crees un formulari, pots provar l'exercici via URL:
204.php?edat=33.
*/
const ANYS_JUBILACIO = 67;
$anyActual = date("Y");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edat - Exercici 204</title>
</head>
<body>
<?php
if (isset($_GET["edat"])) {
    $edat = $_GET["edat"];
    $anyJubilacio = (ANYS_JUBILACIO - $edat) + $anyActual;
    echo "<p>La teua edat a l'any " . ($anyActual - 10) . " era de " . ($edat - 10) . "</p>";
    echo "<p>La teua edat a l'any " . ($anyActual + 10) . " serà de " . ($edat + 10) . "</p>";
    echo "<p>Hauràs de jubilar-te a l'any " . $anyJubilacio . "</p>";
} else {
    echo "<p>Posa la teu edat actual a la variable edat pel QueryString</p>";
}
?>
</body>
</html>