<?php 

function countWords(string $s): int {
    return count(explode(" ", $s));
} 

echo countWords("Hello World!");

?>