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
        $resposta = '';
        foreach ($paraules as $paraula) {
            $resposta .= ' ' . $paraula;
        }
        //return implode(' ', $paraules);
        return $resposta;
    }
}