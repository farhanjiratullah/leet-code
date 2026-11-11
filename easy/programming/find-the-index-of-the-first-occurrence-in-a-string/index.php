<?php

function findTheIndexOfTheFirstOccurence(string $haystack, string $needle): int {
    $position = strpos($haystack, $needle);

    return $position !== false ? $position : -1;

    // Solusi manual (ChatGPT)
    // $haystackLength = strlen($haystack);
    // $needleLength = strlen($needle);

    // for ($i = 0; $i <= $haystackLength - $needleLength; $i++) {
    //     $found = true;

    //     for ($j = 0; $j < $needleLength; $j++) {
    //         if ($haystack[$i + $j] !== $needle[$j]) {
    //             $found = false;
    //             break;
    //         }
    //     }

    //     if ($found) {
    //         return $i;
    //     }
    // }

    // return -1;
}

echo findTheIndexOfTheFirstOccurence('sadbutsad', 'sad') . " 0" . PHP_EOL;
echo findTheIndexOfTheFirstOccurence('leetcode', 'leeto') . " -1" . PHP_EOL;