<?php

function plusOne(array $digits): array {
    for ($i = count($digits) - 1; $i >= 0; $i--) {
        if ($digits[$i] < 9) {
            $digits[$i]++;
            return $digits;
        }

        $digits[$i] = 0;
    }

    array_unshift($digits, 1);

    return $digits;
}

var_dump(plusOne([1,2,3]),[1,2,4]);
var_dump(plusOne([4,3,2,1]),[4,3,2,2]);
var_dump(plusOne([9]),[1,0]);
var_dump(plusOne([7,2,8,5,0,9,1,2,9,5,3,6,6,7,3,2,8,4,3,7,9,5,7,7,4,7,4,9,4,7,0,1,1,1,7,4,0,0,6]),[7,2,8,5,0,9,1,2,9,5,3,6,6,7,3,2,8,4,3,7,9,5,7,7,4,7,4,9,4,7,0,1,1,1,7,4,0,0,7]);