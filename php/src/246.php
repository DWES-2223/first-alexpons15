<!DOCTYPE html>
<html lang="ca">
<?php
$users = include_once('246password.php');
$username = $_POST['username'];
$password = $_POST['password'];
?>
<head>
    <meta charset="UTF-8">
    <title>Exercici 246</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($username, $password)) {
    $found = array_key_exists($username, $users);
    if ($found) {
        if ($users[$username] === $password) { ?>
            <p>L'usuari introduït és correcte</p>
            <?php
        } else { ?>
            <p>La contrasenya és incorrecta</p>
            <?php
        }
    } else { ?>
        <p>L'usuari no està registrat</p>
        <?php
    }
}
?>
</body>
</html>