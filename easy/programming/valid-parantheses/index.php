<?php
function isValid(string $s): bool {
    $stack = [];

    $brackets = [
        ')' => '(',
        '}' => '{',
        ']' => '['
    ];

    for ($i = 0; $i < strlen($s); $i++) {
        $char = $s[$i];

        if (!isset($brackets[$char])) {
            // Jika kurung buka, masukkan ke stack
            $stack[] = $char;
        } else {
            // Jika stack kosong atau pasangan tidak cocok
            if (array_pop($stack) !== $brackets[$char]) {
                return false;
            }
        }
    }

    // Valid jika tidak ada kurung buka yang tersisa
    return empty($stack);
}

var_dump(isValid("()"));      // true
var_dump(isValid("()[]{}"));  // true
var_dump(isValid("(]"));      // false
var_dump(isValid("([])"));    // true
var_dump(isValid("([)]"));    // false