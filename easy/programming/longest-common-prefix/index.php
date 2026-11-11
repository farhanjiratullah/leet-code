<?php

function longestCommonPrefix(array $strs): string {
    $prefix = $strs[0];
    
    for ($i = 1; $i < count($strs); $i++) {
        while (strpos($strs[$i], $prefix) !== 0) {
            $prefix = substr($prefix, 0, -1);

            if ($prefix === '') {
                return "";
            }
        }
    }

    return $prefix;
}

echo longestCommonPrefix(["flower", "flow", "flight"]);     // "fl"
echo "\n";

echo longestCommonPrefix(["dog", "racecar", "car"]);   // ""
echo "\n";