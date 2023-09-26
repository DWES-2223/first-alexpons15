<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/includes/functions.php');

echo (esParell(3))?'parell':'no és parell';

$array = arrayAleatori(5, 0, 10);
echo '<pre>';
print_r($array);
echo '</pre>';

$parells = countParells($array);
echo "<p>Hi ha $parells nombres parells l'array anterior</p>";
