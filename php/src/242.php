<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/includes/functions.php');

$num = rand(-99999, 99999);

echo "<p>El número " . $num . " té " . digits($num) . " digits</p>";

$num2 = 23456;
$pos = 2;
echo "<p>El número " . $num2 . " a la posició " . $pos . " té el digit " . digitsN($num2, $pos) . "</p>";
