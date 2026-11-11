<?php

function removeElement(array &$nums, int $val): int {
    $k = 0;

    for ($i = 0; $i < count($nums); $i++) {
        if ($nums[$i] !== $val) {
            $nums[$k] = $nums[$i];
            $k++;
        }
    }

    return $k;
}

$nums = [3, 2, 2, 3];
var_dump(removeElement($nums, 3), 2);

$nums = [0,1,2,2,3,0,4,2];
var_dump(removeElement($nums, 2), 5);