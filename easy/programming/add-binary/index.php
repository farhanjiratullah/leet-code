<?php
function addBinary($a, $b) {
    $i = strlen($a) - 1;
    $j = strlen($b) - 1;

    $carry = 0;
    $result = '';

    while ($i >= 0 || $j >= 0 || $carry > 0) {
        $sum = $carry;

        if ($i >= 0) {
            $sum += (int) $a[$i];
            $i--;
        }

        if ($j >= 0) {
            $sum += (int) $b[$j];
            $j--;
        }

        $result = ($sum % 2) . $result;
        $carry = intdiv($sum, 2);
    }

    return $result;
}

var_dump(addBinary('11', '1'),'100');
var_dump(addBinary('1010', '1011'),'10101');