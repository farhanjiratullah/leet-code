<?php

function lengthOfLastWord(string $s): int {
    $trimStr = trim($s);
    $splitStr = explode(' ', $trimStr);
    $countStr = count($splitStr);
    $lastWord = $splitStr[$countStr - 1];
    $lengthStr = strlen($lastWord);

    return $lengthStr;

    // Solusi ChatGPT
    // Cara 1
    // $length = 0;
    // $i = strlen($s) - 1;

    // // Lewati spasi di akhir string
    // while ($i >= 0 && $s[$i] === ' ') {
    //     $i--;
    // }

    // // Hitung karakter pada kata terakhir
    // while ($i >= 0 && $s[$i] !== ' ') {
    //     $length++;
    //     $i--;
    // }

    // return $length;

    // Cara 2
    // $words = explode(' ', trim($s));

    // return strlen(end($words));
}

var_dump(lengthOfLastWord('Hello World'),'5');
var_dump(lengthOfLastWord('   fly me   to   the moon  '),'4');
var_dump(lengthOfLastWord('luffy is still joyboy'),'6');