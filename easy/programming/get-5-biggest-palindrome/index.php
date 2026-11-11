
<?php

function getLargestPalindromeProducts(
    int $min = 100,
    int $max = 999,
    int $limit = 5
): array {
    $palindromes = [];

    for ($i = $max; $i >= $min; $i--) {
        for ($j = $i; $j >= $min; $j--) {
            $product = $i * $j;

            // Jika sudah ada 5 hasil dan produk tidak bisa
            // mengalahkan hasil terkecil dari 5 besar.
            if (count($palindromes) >= $limit) {
                $smallest = min(array_keys($palindromes));

                if ($product <= $smallest) {
                    break;
                }
            }

            // Periksa palindrome.
            $number = (string) $product;

            if ($number !== strrev($number)) {
                continue;
            }

            // Hindari produk duplikat.
            if (!isset($palindromes[$product])) {
                $palindromes[$product] = [
                    'product' => $product,
                    'factor1' => $i,
                    'factor2' => $j,
                ];
            }
        }
    }

    usort(
        $palindromes,
        fn($a, $b) => $b['product'] <=> $a['product']
    );

    return array_slice($palindromes, 0, $limit);
}

$results = getLargestPalindromeProducts();

foreach ($results as $index => $result) {
    echo ($index + 1) . ". "
        . "{$result['factor1']} x {$result['factor2']} = "
        . "{$result['product']}"
        . PHP_EOL;
}
