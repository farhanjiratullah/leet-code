<?php

function romanToInt(string $s): int {
    $values = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    ];

    $total = 0;
    $length = strlen($s);

    for ($i = 0; $i < $length; $i++) {
        $current = $values[$s[$i]];

        if ($i + 1 < $length && $current < $values[$s[$i + 1]]) {
            $total -= $current;
        } else {
            $total += $current;
        }
    }

    return $total;
}

echo romanToInt("III");     // 3
echo "\n";

echo romanToInt("LVIII");   // 58
echo "\n";

echo romanToInt("MCMXCIV"); // 1994
echo "\n";