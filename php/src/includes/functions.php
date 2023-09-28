<?php
declare(strict_types=1);

function esParell(int $a) : bool {
    return ($a%2===0);
}

function arrayAleatori(int $tam, int $min, int $max) : array {
    $arrayAleatori = [];
    for ($i = 0; $i < $tam; $i++) {
        $elem = rand($min, $max);
        $arrayAleatori[] = $elem;
    }
    return $arrayAleatori;
}

function countParells(array &$array): int {
    $parells = 0;
    foreach ($array as $item) {
        if ($item % 2 === 0) {
            $parells++;
        }
    }
    return $parells;
}

function major(): int {
    if (func_num_args() == 0) {
        return 0;
    } else {
        $major = -INF;
        for ($i = 0; $i < func_num_args(); $i++) {
            $num = func_get_arg($i);
            if ($num > $major) {
                $major = $num;
            }
        }
        return $major;
    }
}

function concatenar(...$paraules) : String {
    if (count($paraules) == 0) {
        return 'No has introduït cap paraula';
    } else {
        /*
        $resposta = '';
        foreach ($paraules as $paraula) {
            $resposta .= ' ' . $paraula;
        }
        return $resposta;
        */
        return implode(' ', $paraules);
    }
}

function digits(int $num): int {
    $numCadena = strval($num);
    if (strpos($numCadena, '-') !== false) {
        $numCadena = str_replace('-', '', $numCadena);
    }
    return strlen($numCadena);
}
function digitsN(int $num, int $post): int {
    $numCadena = strval($num);

    if (strlen($numCadena) < $post) {
        return 0;
    }

    $post--;

    if (strpos($numCadena, '-') !== false) {
        $numCadena = str_replace('-', '', $numCadena);
    }
    return intval($numCadena[$post]);
}
function llevaDarrere(int $num, int $cant): int {
    $numCadena = strval($num);

    if ($cant >= strlen($numCadena)) {
        return 0;
    }

    $resultat = substr($numCadena, 0, strlen($numCadena) - $cant);
    return intval($resultat);
}
function llevaDavant(int $num, int $cant): int {
    $numCadena = strval($num);

    if ($cant >= strlen($numCadena)) {
        return 0;
    }

    $resultat = substr($numCadena, -(strlen($numCadena) - $cant));
    return intval($resultat);
}

function peseta2euros(int $quantitat, float $cotitzacio = 0.006024096): float {
    return convertir($quantitat, $cotitzacio);
}

function euro2pesetes(int $quantitat, float $cotitzacio = 166.0): float {
    return convertir($quantitat, $cotitzacio);
}

function convertir(int $quantitat, float $cotitzacio): float {
    $resultat = $quantitat * $cotitzacio;
    if (floor($resultat) === $resultat) {
        $resultatCadena = number_format($resultat, 0, '.', '');
    } else {
        $resultatCadena = number_format($resultat, 2, '.', '');
    }
    return floatval($resultatCadena);
}