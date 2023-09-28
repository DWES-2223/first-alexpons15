<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/includes/functions.php');

$array = arrayAleatori(5, -20, 40);
echo '<pre>';
print_r($array);
echo '</pre>';

echo "<p>El nombre major de l'array anterior és " . major(...$array) . "</p>";

$array = array('hola', 'prova', 'test', 'php', 'daw');
echo '<pre>';
print_r($array);
echo '</pre>';

echo "<p>Els paràmetres de l'array anterior concatenats són: " . concatenar(...$array) . "</p>";