<?php 
function countVowels(string $word): int {
    $count = 0;
    for ($i = 0; $i < strlen($word); $i++) {
        if (in_array($word[$i], ['a', 'e', 'i', 'o', 'u'])) {
            $count++;
        }
    }
    return $count;
}

echo countVowels("programming");  // 3