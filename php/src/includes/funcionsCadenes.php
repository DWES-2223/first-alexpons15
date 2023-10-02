<?php
declare(strict_types=1);
include_once('functions.php');

function caractersImparells(string $frase) : string {
    $novaFrase = '';
    for($i = 1; $i <= strlen($frase); $i++) {
        if (!esParell($i)) {
            $novaFrase .= $frase[$i - 1];
        }
    }

    return $novaFrase;
}

function vocals(string $frase) : array {
    $vocals = ['a' => 0,'e' => 0,'i' => 0,'o' => 0,'u' => 0];
    $fraseFiltrada = strtolower(llevarTildes($frase));
    foreach ($vocals as $vocal => $repeticions) {
        $vocals[$vocal] = substr_count($fraseFiltrada, $vocal);
    }
    return $vocals;
}

function llevarTildes(string $frase) : string {
    $tildes = ['á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä',
        'é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë',
        'í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î',
        'ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô',
        'ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü',
        'ñ', 'Ñ', 'ç', 'Ç'];

    $sense_tildes = ['a','a','a','a','a','A','A','A','A',
        'e','e','e','e','E','E','E','E',
        'i','i','i','i','I','I','I','I',
        'o','o','o','o','O','O','O','O',
        'u','u','u','u','U','U','U','U',
        'n','N','c','C'];

    return strtr($frase, array_combine($tildes, $sense_tildes));
}