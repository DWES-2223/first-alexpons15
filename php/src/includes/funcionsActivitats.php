<?php
declare(strict_types=1);

function vell(array $array): string {
    $oldestDate = '';
    $oldestDateKey = '';

    foreach ($array as $record => $currentDate) {
        $englishCurrentDate = fecha_inglesa($currentDate);
        if (empty($oldestDate) || $englishCurrentDate < $oldestDate) {
            $oldestDate = $englishCurrentDate;
            $oldestDateKey = $record;
        }
    }
    return strval($oldestDateKey);
}

function laureado(array $array): string {
    $maxRepeticions = 0;
    $keyMesRepetida = '';

    foreach ($array as $valor) {
        $currentRepeticions = 0;
        foreach ($array as $valorAComparar) {
            if ($valor === $valorAComparar) {
                $currentRepeticions++;
            }
        }
        if ($currentRepeticions > $maxRepeticions) {
            $maxRepeticions = $currentRepeticions;
            $keyMesRepetida = $valor;
        }
    }

    return strval($keyMesRepetida);
}

function jove(array $natalicis, array $dates): array {
    $menorDiferencia = INF;
    $keyAtletaMesJove = '';

    foreach ($natalicis as $record => $natalici) {
        $nataliciActual = intval($natalici);
        $dataActual = intval(any($dates[$record]));
        $diferenciaActual = $dataActual - $nataliciActual;
        if ($diferenciaActual < $menorDiferencia) {
            $menorDiferencia = $diferenciaActual;
            $keyAtletaMesJove = $record;
        }
    }

    return array($keyAtletaMesJove, $menorDiferencia);
}

function nomAtletaMesJove(array $atletes, string $key): string {
    foreach ($atletes as $record => $nom) {
        if ($key === $record) {
            return $nom;
        }
    }

    return '';
}

function fecha_inglesa($fecha): string {
    $dataPartida = explode('.', $fecha);
    return $dataPartida[2] . '/' . $dataPartida[1] . '/' . $dataPartida[0];
}

function any(string $anyComplet): string {
    $dataPartida = explode('.', $anyComplet);
    return $dataPartida[2];
}

function array_column_ext($array, $columnKey, $indexKey = null) : array {
    $result = array();
    foreach ($array as $subarray => $value) {
        if (array_key_exists($columnKey,$value)) {
            $val = $value[$columnKey];
        }
        else if ($columnKey === null) {
            $val = $value;
        }
        else { continue; }

        if ($indexKey === null) {
            $result[] = $val;
        }
        elseif ($indexKey == -1 || array_key_exists($indexKey,$value)) {
            $result[($indexKey == -1)?$subarray: $value[$indexKey]] = $val;
        }
    }
    return $result;
}