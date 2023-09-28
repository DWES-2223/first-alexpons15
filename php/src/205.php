<!DOCTYPE html>
<html lang="es">
<?php
/*
205.php (pissarra): diners - A partir d'una quantitat de diners, mostrar la seua descomposició en bitllets
(500, 200, 100, 50, 20, 10, 5) i monedes (2, 1), perquè el nombre d'elements siga mínim. No s'ha d'utilitzar
cap instrucció condicional. Per exemple, en introduir 139 ha de mostrar:

1 bitllet de 100

0 bitllet de 50

1 bitllet de 20

1 bitllet de 10

1 bitllet de 5

2 moneda de 2
*/

const BILLETS = [500, 200, 100, 50, 20, 10, 5, 2, 1];
//const MONEDES = [2, 1];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diners - Exercici 205</title>
</head>
<body>
<?php
if (isset($_GET["quantitat"])) {
    $diners = $_GET["quantitat"];
    for ($i=0; $i<count(BILLETS); $i++) {
        $billet = BILLETS[$i];
        $nombreBillets = intdiv($diners, $billet);
        $format = ($billet<5)?'moneda':'bitllet';
        $format .= ($nombreBillets>1)?'s':'';
        echo "$nombreBillets $format de $billet</br>";
        $diners -= $nombreBillets * $billet;
    }
} else {
    echo "<p>Posa la quantitat a la variable quantitat pel QueryString</p>";
}
?>
</body>
</html>