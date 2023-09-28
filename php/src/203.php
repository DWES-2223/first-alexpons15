<!DOCTYPE html>
<html lang="es">
    <?php
    /*
    203.html i 203.php (pissarra): És el mateix exercici que l'anterior, però separant la lògica. En el primer arxiu 
    crearem el formulari per a introduir les dades, i després recollim les dades i generem la taula en el segon arxiu.
    */
        $nom = $_POST["nom"];
        $primerCognom = $_POST["cognom1"];
        $segonCognom = $_POST["cognom2"];
        $email = $_POST["email"];
        $anyNaixement = $_POST["any"];
        $telefon = $_POST["telefon"];
        //extract($_POST);
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dades personals - Exercici 203</title>
</head>
<body>
<table>
        <tr>
            <td>Nom</td>
            <td><?=$nom?></td>
        </tr>
        <tr>
            <td>Cognoms</td>
            <td><?=$primerCognom . ' ' . $segonCognom?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?=$email?></td>
        </tr>
        <tr>
            <td>Natalici</td>
            <td><?=$anyNaixement?></td>
        </tr>
        <tr>
            <td>Telèfon</td>
            <td><?=$telefon?></td>
        </tr>
    </table>
</body>
</html>