<?php

function searchInsert(array $nums, int $target) {
    // Binary Search
    $left = 0;
    $right = count($nums) - 1;

    while ($left <= $right) {
        $mid = (int) (($left + $right) / 2);

        if ($nums[$mid] === $target) {
            return $mid;
        }

        if ($nums[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return $left;
    
    // foreach ($nums as $index => $num) {
    //     if ($num >= $target) {
    //         return $index;
    //     }
    // }

    // return count($nums);
}

echo searchInsert([1,3,5,6], 5) . " 2" . PHP_EOL;
echo searchInsert([1,3,5,6], 2) . " 1" . PHP_EOL;
echo searchInsert([1,3,5,6], 7) . " 4" . PHP_EOL;