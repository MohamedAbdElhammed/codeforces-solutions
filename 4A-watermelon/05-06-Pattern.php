<?php 
// Pattern: Even numbers
$even = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; 
foreach($even as $value) {
    if($value % 2 == 0) {
        echo $value . " ";
    }
}


$number_characters = ["a", "hello", "to", "world", "php"];
foreach($number_characters as $value) {
    if(strlen($value) > 3) { 
        $word = $value;
    }
} 
echo $word;