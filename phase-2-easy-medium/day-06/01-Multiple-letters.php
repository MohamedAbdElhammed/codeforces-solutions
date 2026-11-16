<?php 
function countVowels(string $word): int {
    $count = 0;
    for ($i = 0; $i < strlen($word); $i++) {
        if (in_array($word[$i], ['a', 'e', 'i', 'o', 'u'])) {
        echo $word[$i];
        $count++ . "<br>";
        }
    }
    echo "<br>";
    return $count;
}

echo countVowels("hello world");