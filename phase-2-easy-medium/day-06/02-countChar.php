<?php
function countChar(string $text, string $char) {
    $count = 0; 
    for($i = 0; $i < strlen($text); $i++) {
        if ($text[$i] === $char) {
            $count++;
        }
    }
        return $count; 
}

echo countChar("banana", "a");
