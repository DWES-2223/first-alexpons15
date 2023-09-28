<!DOCTYPE html>
<html lang="es">
    <?php
    /*
    202.php: Escriu un programa que emmagatzeme en variables el teu nom, primer cognom, segon cognom, 
    email, any de naixement i telèfon. Després mostra'ls per pantalla dins d'una taula.
    */
        $nom = "Alejandro";
        $primerCognom = "Pons";
        $segonCognom = "Roca";
        $email = "ponsroca15@gmail.com";
        $anyNaixement = 1996;
        $telefon = 629721086;
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dades personals - Exercici 202</title>
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