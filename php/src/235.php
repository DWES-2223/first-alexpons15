<!DOCTYPE html>
<html lang="es">
<?php
$persona1 = ['nom' => 'Javi', 'altura' => 170, 'email' => 'javi@google.es'];
$persona2 = ['nom' => 'Alejandro', 'altura' => 183, 'email' => 'alejandro@google.es'];
$persona3 = ['nom' => 'Sergi', 'altura' => 180, 'email' => 'sergi@google.es'];
$persones = [$persona1, $persona2, $persona3,
    ['nom' => 'Maria', 'altura' => 168, 'email' => 'maria@google.es'],
    ['nom' => 'Nuria', 'altura' => 169, 'email' => 'nuria@google.es']];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 235</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Nom</th>
        <th>Alçada</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($persones as $persona) { ?>
        <tr>
            <td><?= $persona['nom'] ?></td>
            <td><?= $persona['altura'] ?></td>
            <td><?= $persona['email'] ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
</body>
</html>