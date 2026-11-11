<?php

function removeDuplicates(array &$nums): int {
    $k = 1;

    for ($i = 1; $i < count($nums); $i++) {
        if ($nums[$i] !== $nums[$k - 1]) {
            $nums[$k] = $nums[$i];
            $k++;
        }
    }

    return $k;

    // Solusi orang
    // $f = array_flip($nums);
    // $nums = array_keys($f);
    // return count($nums);
}

$nums = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];

$k = removeDuplicates($nums);

echo "k = " . $k . PHP_EOL;
print_r(array_slice($nums, 0, $k));