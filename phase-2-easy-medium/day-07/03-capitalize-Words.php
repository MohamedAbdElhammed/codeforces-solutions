<?php 
function capitalizeWords(string $s): string {
    $words = explode(" ", $s);
    $result = [];  

    foreach ($words as $word) {
        $result[] = ucfirst($word);
    }

    return implode(" ", $result);   
}

echo capitalizeWords("hello world from php");