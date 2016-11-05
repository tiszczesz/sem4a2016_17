<?php

function GetUsers() {
    return [
            ["Jan", "Nowak", 34],
            ["Adam", "Nowak", 22], //  $t[1][1];
        ["Monika", "Głowacka", 19],
            ["Piotr", "Gryk", 44],
            ["Anna", "Kowalska", 34],
            ["Nowy", "Nowszy", 55]
    ];
}

function GetWorkers() {
    return [
        1 => ["Jan", "Nowak", 4500],
        2 => ["Adam", "Nowak", 3700], //  $t[1][1];
        3 => ["Monika", "Głowacka", 2500],
        4 => ["Piotr", "Gryk", 7800],
        5 => ["Anna", "Kowalska", 3100],
        6 => ["Nowy", "Nowszy-Najnowszy", 5500]
    ];
}

function GetSum(array $dane) {
    $sum = 0;
    foreach ($dane as $row) {
        $sum += $row[2];
    }
    return $sum;
}

function GetMax($dane) {
    $max = -PHP_INT_MAX;
    $kmax = -1;
    foreach ($dane as $k => $row) {
        if ($max < $row[2]) {
            $max = $row[2];
            $kmax = $k;
        }
    }
    return $dane[$kmax];
}
function GetMaxLength($dane) {
    $max = -PHP_INT_MAX;
    $kmax = -1;
    foreach ($dane as $k => $row) {
        if ($max < strlen($row[1])) {
            $max = strlen($row[1]);
            $kmax = $k;
        }
    }
    return $dane[$kmax];
}
function GetMin($dane) {
    $min = PHP_INT_MAX;
    $kmin = -1;
    foreach ($dane as $k => $row) {
        if ($min > $row[2]) {
            $min = $row[2];
            $kmin = $k;
        }
    }
    return $dane[$kmin];
}

function GetAVG(array $dane) {
    return GetSum($dane) / count($dane);
}

function GetStatFromWorkers(array $dane) {
    return [
        'suma' => GetSum($dane),
        'Srednia' => GetAVG($dane),
        'maksymalna' => GetMax($dane),
        'minimalna' => GetMin($dane),
        'maxlength' => GetMaxLength($dane)
    ];
}

function ArrayToSelect(array $dane) {
    $html = '<select>';
    foreach ($dane as $k => $row) {
        $html .= "<option value='{$k}'>{$row[0]} {$row[1]} {$row[2]}PLN</option>\n";
    }

    return $html . '</select>';
}

function ArrayToHtml(array $dane) {
    $html = '<table>';
    $html .= '<tr><th>Lp</th><th>Imię</th><th>Nazwisko</th>'
            . '<th>Wiek</th></tr>' . "\n";
    $i = 0;
    foreach ($dane as $row) {
        $i++;
        $html .= "<tr><td>{$i}</td><td>{$row[0]}</td>"
                . "<td>{$row[1]}</td><td>{$row[2]}</td></tr>\n";
    }
    return $html . '</table>';
}
