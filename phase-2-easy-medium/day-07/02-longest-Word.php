<?php 
function longestWord(string $s): string {
    $words = explode(" ", $s);
    $longest = $words[0];            

    foreach ($words as $word) {
        if (strlen($word) > strlen($longest)) {
            $longest = $word;
        }
    }

    return $longest;
}

echo longestWord("PHP is a very popular language");