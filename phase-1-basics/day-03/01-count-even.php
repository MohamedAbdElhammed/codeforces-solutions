<?php 
// 7 . 
$numbers = [4, 7, 10, 3, 8, 15, 6];
$count = 0; 

foreach ($numbers as $number) {
    if($number % 2 == 0) {
        $count++;
    }
}
echo $count . '<br>';
