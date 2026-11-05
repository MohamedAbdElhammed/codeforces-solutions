<?php 
function sumEvens(array $arr): int {
    $sum = 0;                 
    foreach ($arr as $num) {  
        if ($num % 2 === 0) { 
            $sum += $num;      
        }
    }
    return $sum;               
}

echo sumEvens([1, 2, 3, 4, 5, 6]) . '<br>';  
echo sumEvens([1, 3, 5]);