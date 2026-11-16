<?php 
function isPalindrome(string $word): bool {
    $word = strtolower($word);
    $reversed = strrev($word);
    return $word === $reversed;
}
echo isPalindrome("LEVEl");